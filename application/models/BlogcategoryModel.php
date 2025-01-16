<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogcategoryModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllCategory() {
        $query = $this->db->get_where('blog_category', ['status' => 1]);
        return $query->result_array();
    }

    // Get the total number of blog_category
    public function getBlogsCategoryCount()
    {
        return $this->db->count_all('blog_category');
    }

    // Fetch the blog_category with limit and offset for pagination
    // public function getblog_category($limit, $offset) {
    //     $this->db->limit($limit, $offset);
    //     $query = $this->db->get('blog_category');
    //     return $query->result();
    // }
    public function getAdminBlogCategory($limit, $offset, $exclude_id = null)
    {
        $this->db->select('blog_category.*');
        $this->db->from('blog_category');
        if ($exclude_id !== null) {
            $this->db->where('blog_category.id !=', $exclude_id);
        }
        //$this->db->where('status' ,1);
        $this->db->order_by('blog_category.created_at', 'DESC');
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

    public function getHomeBlogCategory()
    {
        $this->db->select('blog_category.*');
        $this->db->from('blog_category');
        $this->db->where('status', 1);
        $this->db->order_by('blog_category.created_at', 'DESC');
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

    public function getBlogCategory($limit, $offset, $exclude_id = null)
    {
        $this->db->select('blog_category.*');
        $this->db->from('blog_category');
        if ($exclude_id !== null) {
            $this->db->where('blog_category.id !=', $exclude_id);
        }
        $this->db->where('status' ,1);
        $this->db->order_by('blog_category.created_at', 'DESC');
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
    public function insertBlogsCategory($data)
    {
        return $this->db->insert('blog_category', $data);
    }
    public function getBlogsCategoryById($id)
    {
        $this->db->select('blog_category.*');
        $this->db->from('blog_category');
        $this->db->where('blog_category.id', $id);
        //$this->db->where('status' ,'publish');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function getBlogsCategoryBySlug($id)
    {
        $this->db->select('blog_category.*');
        $this->db->from('blog_category');
        $this->db->where('blog_category.slug', $id);
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

    public function getCommentsByBlogsCategoryId($blog_id)
    {
        $this->db->select('blog_comments.comment, users.name as user_name, blog_comments.created_at');
        $this->db->from('blog_comments');
        $this->db->join('users', 'users.id = blog_comments.user_id');
        $this->db->where('blog_comments.blog_id', $blog_id);
        $this->db->order_by('blog_comments.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function deleteBlogsCategoryById($id)
    {
        return $this->db->delete('blog_category', ['id' => $id]);
    }

    public function updateBlogsCategory($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('blog_category', $data);
    }
    
    public function updateBlogsCategory1($id, $title, $content, $tags, $publish_date, $publish_time, $image_path, $sponsor, $slug, $meta_title, $meta_description, $thumbnail_file_name, $status, $schedule_datetime)
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
        return $this->db->update('blog_category', $data);
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
        $query = $this->db->get('blog_category');
        return $query->num_rows() > 0;
    }

    public function getAllBlogsCategory() {
        $query = $this->db->select('slug')
                          ->from('blog_category')
                          ->get();
        return $query->result_array();
    }

    public function getFilteredBlogCategory($category, $limit, $start, $exclude_id = null)
    {
        // Select columns and join users table for author name
        $this->db->select('blog_category.*');
        $this->db->from('blog_category');

        
        $this->db->where('status', 1);
        $this->db->order_by('blog_category.created_at', 'DESC');

        // Exclude a specific blog ID, if provided
        if ($exclude_id !== null) {
            $this->db->where('blog_category.id !=', $exclude_id);
        }

        // Filter by category if not "all"
        if ($category !== 'all') {
            $this->db->where('blog_category.category', $category);
        }

        // Limit results for pagination
        if ($limit > 0) {
            $this->db->limit($limit, $start);
        }

        // Execute query
        $query = $this->db->get();
        $result = $query->result();

        // Strip tags from blog content
        foreach ($result as &$blog) {
            $blog->content = strip_tags($blog->content);
        }

        return $result;
    }


    public function getFilteredBlogsCategoryCount($category)
    {
        if ($category !== 'all') {
            $this->db->where('category', $category);
        }
        return $this->db->count_all_results('blog_category');
    }


}
