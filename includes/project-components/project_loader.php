<?php
// Fixed includes/project_loader.php
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
        
        // Try multiple possible paths
        $possiblePaths = [
            __DIR__ . '/',              // Same directory as project_loader.php
            __DIR__ . '/projects/',     // projects subdirectory
            dirname(__DIR__) . '/includes/prohect-cards/', // From root
        ];
        
        $projectDir = null;
        foreach ($possiblePaths as $path) {
            if (is_dir($path)) {
                $projectDir = $path;
                break;
            }
        }
        
        if ($projectDir && is_dir($projectDir)) {
            $files = glob($projectDir . '*.php');
            foreach ($files as $file) {
                // Skip the project_loader.php and project_card.php files
                if (basename($file) === 'project_loader.php' || basename($file) === 'project_card.php') {
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
        }
    }
}
?>

