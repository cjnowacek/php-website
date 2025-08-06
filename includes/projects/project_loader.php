<?php

// includes/project_loader.php
class ProjectLoader {
    private static $projects = null;
    
    public static function getAllProjects() {
        if (self::$projects === null) {
            self::loadProjects();
        }
        return self::$projects;
    }
    
    public static function getProjectsByCategory($category) {
        $projects = self::getAllProjects();
        return array_filter($projects, function($project) use ($category) {
            return $project['category'] === $category;
        });
    }
    
    public static function getFeaturedProjects($limit = null) {
        $projects = self::getAllProjects();
        $featured = array_filter($projects, function($project) {
            return $project['featured'] === true;
        });
        
        // Sort by order
        usort($featured, function($a, $b) {
            return $a['order'] <=> $b['order'];
        });
        
        return $limit ? array_slice($featured, 0, $limit) : $featured;
    }
    
    public static function getProject($id) {
        $projects = self::getAllProjects();
        foreach ($projects as $project) {
            if ($project['id'] === $id) {
                return $project;
            }
        }
        return null;
    }
    
    private static function loadProjects() {
        self::$projects = [];
        $projectDir = __DIR__ . '/projects/';
        
        if (is_dir($projectDir)) {
            $files = glob($projectDir . '*.php');
            foreach ($files as $file) {
                $project = include $file;
                if (is_array($project)) {
                    self::$projects[] = $project;
                }
            }
        }
    }
}
?>
