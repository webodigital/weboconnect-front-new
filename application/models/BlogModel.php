<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Get the total number of blogs
    public function getBlogCount()
    {
        return $this->db->count_all('blogs');
    }

    // Fetch the blogs with limit and offset for pagination
    // public function getBlogs($limit, $offset) {
    //     $this->db->limit($limit, $offset);
    //     $query = $this->db->get('blogs');
    //     return $query->result();
    // }
    public function getAdminBlogs($limit, $offset, $exclude_id = null)
    {
        $this->db->select('blogs.*, users.name AS author_name');
        $this->db->from('blogs');
        $this->db->join('users', 'users.id = blogs.user_id');
        if ($exclude_id !== null) {
            $this->db->where('blogs.id !=', $exclude_id);
        }
        //$this->db->where('status' ,'publish');
        $this->db->order_by('blogs.created_at', 'DESC');
        if($limit != 0){
            $this->db->limit($limit, $offset);    
        }
        $query = $this->db->get();
        $result = $query->result();
        foreach ($result as &$blog) {
            $blog->content = strip_tags($blog->content);
        }
        return $result;
    }

    public function getHomeBlogs()
    {
        $this->db->select('blogs.*, users.name AS author_name');
        $this->db->from('blogs');
        $this->db->join('users', 'users.id = blogs.user_id');
        $this->db->where('status', 'publish');
        $this->db->order_by('blogs.created_at', 'DESC');
        $this->db->limit(3, 0);
        $query = $this->db->get();
        // Debugging: Uncomment for debugging in development only.
        // echo $this->db->last_query();
        $result = $query->result();
        // Ensure $result is not empty before processing.
        if (!$result) {
            return [];
        }
        foreach ($result as &$blog) {
            $blog->content = strip_tags($blog->content);
        }
        return $result;
    }

    public function getBlogs($limit, $offset, $exclude_id = null)
    {
        $this->db->select('blogs.*, users.name AS author_name');
        $this->db->from('blogs');
        $this->db->join('users', 'users.id = blogs.user_id');
        if ($exclude_id !== null) {
            $this->db->where('blogs.id !=', $exclude_id);
        }
        $this->db->where('status' ,'publish');
        $this->db->order_by('blogs.created_at', 'DESC');
        if($limit != 0){
            $this->db->limit($limit, $offset);    
        }
        $query = $this->db->get();
        $result = $query->result();
        foreach ($result as &$blog) {
            $blog->content = strip_tags($blog->content);
        }
        return $result;
    }
    
    // Insert a new blog into the database
    public function insertBlog($data)
    {
        return $this->db->insert('blogs', $data);
    }
    public function insertComment($data)
    {
        return $this->db->insert('comments', $data);
    }
    public function getBlogById($id)
    {
        $this->db->select('blogs.*, users.name AS author_name');
        $this->db->from('blogs');
        $this->db->join('users', 'users.id = blogs.user_id');
        $this->db->where('blogs.id', $id);
        //$this->db->where('status' ,'publish');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function getBlogBySlug($id)
    {
        $this->db->select('blogs.*, users.name AS author_name');
        $this->db->from('blogs');
        $this->db->join('users', 'users.id = blogs.user_id');
        $this->db->where('blogs.slug', $id);
        $this->db->where('status' ,'publish');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function saveComment($blog_id, $comment, $user_id)
    {
        $data = [
            'blog_id' => $blog_id,
            'comment' => $comment,
            'user_id' => $user_id,
            'created_at' => date('Y-m-d H:i:s')
        ];

        return $this->db->insert('blog_comments', $data);
    }

    public function getCommentsByBlogId($blog_id)
    {
        $this->db->select('blog_comments.comment, users.name as user_name, blog_comments.created_at');
        $this->db->from('blog_comments');
        $this->db->join('users', 'users.id = blog_comments.user_id');
        $this->db->where('blog_comments.blog_id', $blog_id);
        $this->db->order_by('blog_comments.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function deleteBlogById($id)
    {
        return $this->db->delete('blogs', ['id' => $id]);
    }
    public function updateBlog($id, $title, $content, $tags, $publish_date, $publish_time, $image_path, $sponsor, $slug, $meta_title, $meta_description, $thumbnail_file_name, $status, $schedule_datetime)
    {
        $data = [
            'title' => $title,
            'content' => $content,
            'tags' => $tags,
            'publish_date' => $publish_date,
            'publish_time' => $publish_time,
            'sponsor' => $sponsor,
            'slug' => $slug,
            'updated_at' => date('Y-m-d H:i:s'),
            'meta_title' => $meta_title,
            'meta_description' => $meta_description,
            'status' => $status,
            'schedule_datetime' => $schedule_datetime
        ];

        if ($image_path) {
            $data['image'] = $image_path;
            $data['thumbnail'] = $thumbnail_file_name;
        }

        $this->db->where('id', $id);
        return $this->db->update('blogs', $data);
    }

    // public function blogLike($userId, $blogId) {
    //     $existingLike = $this->db->get_where('blog_likes', ['user_id' => $userId, 'blog_id' => $blogId])->row();

    //     if ($existingLike) {
    //         $this->db->delete('blog_likes', ['id' => $existingLike->id]);
    //         return ['status' => '0'];
    //     } else {
    //         $this->db->insert('blog_likes', ['user_id' => $userId, 'blog_id' => $blogId, 'status' => '1']);
    //         return ['status' => '1'];
    //     }
    // }
    public function blogLike($userId, $blogId)
    {
        $existingLike = $this->db->get_where('blog_likes', ['user_id' => $userId, 'blog_id' => $blogId])->row();
        if ($existingLike) {
            $deleteSuccess = $this->db->delete('blog_likes', ['id' => $existingLike->id]);
            if ($deleteSuccess) {
                return ['status' => '0'];
            } else {
                return ['status' => 'error', 'message' => 'Failed to unlike the blog.'];
            }
        } else {
            $insertSuccess = $this->db->insert('blog_likes', ['user_id' => $userId, 'blog_id' => $blogId, 'status' => '1']);
            if ($insertSuccess) {
                return ['status' => '1'];
            } else {
                return ['status' => 'error', 'message' => 'Failed to like the blog.'];
            }
        }
    }
    public function getLikeCount($blogId)
    {
        $this->db->select('COUNT(*) as like_count');
        $this->db->where('blog_id', $blogId);
        $query = $this->db->get('blog_likes');

        if ($query->num_rows() > 0) {
            return $query->row()->like_count;
        } else {
            return 0; // Return 0 if no likes found for the blog
        }
    }
    public function getCommentCount($blogId)
    {
        $this->db->select('COUNT(*) as like_count');
        $this->db->where('blog_id', $blogId);
        $query = $this->db->get('blog_comments');

        if ($query->num_rows() > 0) {

            return $query->row()->like_count;
        } else {
            return 0; // Return 0 if no likes found for the blog
        }
    }
    public function slugExists($slug)
    {
        $this->db->where('slug', $slug);
        $query = $this->db->get('blogs');
        return $query->num_rows() > 0;
    }

    public function getAllBlogs() {
        $query = $this->db->select('slug')
                          ->from('blogs')
                          ->get();
        return $query->result_array();
    }
}
