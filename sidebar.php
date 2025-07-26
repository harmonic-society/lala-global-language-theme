<?php
/**
 * The sidebar containing the main widget area
 *
 * @package LaLa_Global_Language
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area sidebar">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>

<style>
.widget-area {
    position: sticky;
    top: 100px;
}

.widget {
    background: white;
    padding: 30px;
    border-radius: 20px;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease;
}

.widget:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.widget ul {
    list-style: none;
    padding: 0;
}

.widget ul li {
    padding: 10px 0;
    border-bottom: 1px solid #eee;
}

.widget ul li:last-child {
    border-bottom: none;
}

.widget ul li a {
    color: var(--text-color);
    text-decoration: none;
    transition: color 0.3s ease;
}

.widget ul li a:hover {
    color: var(--primary-color);
}

/* Search Widget */
.widget_search form {
    display: flex;
    gap: 10px;
}

.widget_search input[type="search"] {
    flex: 1;
    padding: 12px 20px;
    border: 2px solid #eee;
    border-radius: 50px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.widget_search input[type="search"]:focus {
    outline: none;
    border-color: var(--primary-color);
}

.widget_search button {
    padding: 12px 25px;
    background: var(--primary-color);
    color: white;
    border: none;
    border-radius: 50px;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.3s ease;
}

.widget_search button:hover {
    background: var(--secondary-color);
}

/* Categories Widget */
.widget_categories ul li {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.widget_categories .count {
    background: var(--accent-color);
    color: var(--dark-color);
    padding: 2px 10px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
}

/* Tag Cloud Widget */
.widget_tag_cloud a {
    display: inline-block;
    padding: 8px 16px;
    margin: 5px;
    background: #f0f0f0;
    border-radius: 50px;
    text-decoration: none;
    color: var(--text-color);
    font-size: 0.9rem !important;
    transition: all 0.3s ease;
}

.widget_tag_cloud a:hover {
    background: var(--primary-color);
    color: white;
    transform: translateY(-2px);
}

/* Recent Posts Widget */
.widget_recent_entries ul li {
    padding: 15px 0;
}

.widget_recent_entries .post-date {
    display: block;
    font-size: 0.85rem;
    color: #666;
    margin-top: 5px;
}

/* Calendar Widget */
.widget_calendar table {
    width: 100%;
    text-align: center;
}

.widget_calendar caption {
    font-weight: 600;
    margin-bottom: 10px;
    color: var(--primary-color);
}

.widget_calendar td,
.widget_calendar th {
    padding: 8px;
}

.widget_calendar th {
    font-weight: 600;
    color: var(--secondary-color);
}

.widget_calendar #today {
    background: var(--accent-color);
    border-radius: 50%;
    font-weight: 600;
}

.widget_calendar a {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
}
</style>