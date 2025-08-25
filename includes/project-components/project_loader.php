<?php
// Fixed includes/project-components/project_loader.php
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
            return isset($project['featured']) && $project['featured'] === true;
        });
        
        // Sort by order
        usort($featured, function($a, $b) {
            $orderA = isset($a['order']) ? $a['order'] : 999;
            $orderB = isset($b['order']) ? $b['order'] : 999;
            return $orderA <=> $orderB;
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
        
        // Fixed: Look in the correct project-cards directory
        $projectDir = dirname(__DIR__) . '/project-cards/';
        
        if (is_dir($projectDir)) {
            $files = glob($projectDir . '*.php');
            foreach ($files as $file) {
                // Skip any non-project files
                $filename = basename($file);
                if (in_array($filename, ['project_loader.php', 'project_card.php'])) {
                    continue;
                }
                
                try {
                    $project = include $file;
                    if (is_array($project) && isset($project['id'])) {
                        self::$projects[] = $project;
                    }
                } catch (Exception $e) {
                    // Skip files that cause errors
                    error_log("Error loading project file {$file}: " . $e->getMessage());
                }
            }
        } else {
            // Debug: Log the directory we're trying to access
            error_log("ProjectLoader: Directory not found: " . $projectDir);
        }
    }
}
?>
