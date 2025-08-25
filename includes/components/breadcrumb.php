<?php
// includes/components/breadcrumb.php
function renderBreadcrumb($breadcrumbs) {
    if (empty($breadcrumbs)) return;
    
    echo '<nav style="margin: 20px 0; color: var(--text-secondary); font-size: 14px;">';
    
    $lastIndex = count($breadcrumbs) - 1;
    
    foreach ($breadcrumbs as $index => $breadcrumb) {
        if ($index === $lastIndex) {
            // Last item (current page) - no link
            echo '<span>' . htmlspecialchars($breadcrumb['title']) . '</span>';
        } else {
            // Linked items
            echo '<a href="' . htmlspecialchars($breadcrumb['url']) . '" style="color: var(--header-color); text-decoration: none;">';
            echo htmlspecialchars($breadcrumb['title']);
            echo '</a> <span style="color: var(--header-color); margin: 0 8px;">•</span>';
        }
    }
    
    echo '</nav>';
}
?>
