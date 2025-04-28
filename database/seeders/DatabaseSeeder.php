<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed projects
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'slug' => 'e-commerce-platform',
                'description' => 'A full-featured e-commerce platform with product management, cart, checkout, and payment processing.',
                'image_url' => '/images/projects/ecommerce.jpg',
                'demo_url' => 'https://ecommerce-demo.example.com',
                'github_url' => 'https://github.com/yourusername/ecommerce',
                'category' => 'Web Application',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Stripe', 'Redis'],
                'is_featured' => true,
                'order' => 1,
                'completed_at' => '2023-12-15',
            ],
            [
                'title' => 'Task Management System',
                'slug' => 'task-management-system',
                'description' => 'A collaborative task management application with real-time updates, notifications, and analytics.',
                'image_url' => '/images/projects/task-manager.jpg',
                'demo_url' => 'https://taskmanager-demo.example.com',
                'github_url' => 'https://github.com/yourusername/task-manager',
                'category' => 'Web Application',
                'technologies' => ['Laravel', 'Vue.js', 'PostgreSQL', 'WebSockets'],
                'is_featured' => true,
                'order' => 2,
                'completed_at' => '2023-09-28',
            ],
            [
                'title' => 'Blog Platform',
                'slug' => 'blog-platform',
                'description' => 'A modern blogging platform with markdown support, category management, and SEO optimization.',
                'image_url' => '/images/projects/blog.jpg',
                'demo_url' => 'https://blog-demo.example.com',
                'github_url' => 'https://github.com/yourusername/blog',
                'category' => 'Content Management',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'TailwindCSS'],
                'is_featured' => true,
                'order' => 3,
                'completed_at' => '2023-07-10',
            ],
            [
                'title' => 'Real Estate Listing',
                'slug' => 'real-estate-listing',
                'description' => 'A real estate listing platform with advanced search, map integration, and virtual tours.',
                'image_url' => '/images/projects/real-estate.jpg',
                'demo_url' => 'https://realestate-demo.example.com',
                'github_url' => 'https://github.com/yourusername/real-estate',
                'category' => 'Web Application',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Google Maps API'],
                'is_featured' => false,
                'order' => 4,
                'completed_at' => '2023-05-22',
            ],
            [
                'title' => 'Weather Dashboard',
                'slug' => 'weather-dashboard',
                'description' => 'A weather dashboard with beautiful visualizations, historical data, and forecast predictions.',
                'image_url' => '/images/projects/weather.jpg',
                'demo_url' => 'https://weather-demo.example.com',
                'github_url' => 'https://github.com/yourusername/weather',
                'category' => 'Data Visualization',
                'technologies' => ['Vue.js', 'OpenWeather API', 'Chart.js'],
                'is_featured' => false,
                'order' => 5,
                'completed_at' => '2023-03-15',
            ],
        ];

        foreach ($projects as $projectData) {
            Project::create($projectData);
        }

        // Seed skills
        $skills = [
            // Frontend
            [
                'name' => 'HTML5/CSS3',
                'category' => 'Frontend',
                'icon' => 'bi bi-filetype-html',
                'proficiency' => 95,
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'name' => 'JavaScript',
                'category' => 'Frontend',
                'icon' => 'bi bi-filetype-js',
                'proficiency' => 90,
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'name' => 'Vue.js',
                'category' => 'Frontend',
                'icon' => 'bi bi-code-slash',
                'proficiency' => 95,
                'is_featured' => true,
                'order' => 3,
            ],
            [
                'name' => 'React',
                'category' => 'Frontend',
                'icon' => 'bi bi-code-slash',
                'proficiency' => 75,
                'is_featured' => false,
                'order' => 4,
            ],
            [
                'name' => 'Bootstrap',
                'category' => 'Frontend',
                'icon' => 'bi bi-bootstrap',
                'proficiency' => 90,
                'is_featured' => true,
                'order' => 5,
            ],
            [
                'name' => 'TailwindCSS',
                'category' => 'Frontend',
                'icon' => 'bi bi-palette',
                'proficiency' => 85,
                'is_featured' => false,
                'order' => 6,
            ],

            // Backend
            [
                'name' => 'PHP',
                'category' => 'Backend',
                'icon' => 'bi bi-filetype-php',
                'proficiency' => 95,
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'name' => 'Laravel',
                'category' => 'Backend',
                'icon' => 'bi bi-code-square',
                'proficiency' => 95,
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'name' => 'Node.js',
                'category' => 'Backend',
                'icon' => 'bi bi-code-slash',
                'proficiency' => 80,
                'is_featured' => false,
                'order' => 3,
            ],
            [
                'name' => 'Python',
                'category' => 'Backend',
                'icon' => 'bi bi-filetype-py',
                'proficiency' => 70,
                'is_featured' => false,
                'order' => 4,
            ],

            // Database
            [
                'name' => 'MySQL',
                'category' => 'Database',
                'icon' => 'bi bi-database',
                'proficiency' => 90,
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'name' => 'PostgreSQL',
                'category' => 'Database',
                'icon' => 'bi bi-database',
                'proficiency' => 85,
                'is_featured' => false,
                'order' => 2,
            ],
            [
                'name' => 'MongoDB',
                'category' => 'Database',
                'icon' => 'bi bi-database',
                'proficiency' => 75,
                'is_featured' => false,
                'order' => 3,
            ],
            // DevOps
            [
                'name' => 'Docker',
                'category' => 'DevOps',
                'icon' => 'bi bi-box-seam',
                'proficiency' => 80,
                'is_featured' => false,
                'order' => 1,
            ],
            [
                'name' => 'Git',
                'category' => 'DevOps',
                'icon' => 'bi bi-git',
                'proficiency' => 90,
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'name' => 'CI/CD',
                'category' => 'DevOps',
                'icon' => 'bi bi-arrow-repeat',
                'proficiency' => 75,
                'is_featured' => false,
                'order' => 3,
            ],
            // Other
            [
                'name' => 'Figma',
                'category' => 'Design',
                'icon' => 'bi bi-file-earmark-image',
                'proficiency' => 80,
                'is_featured' => false,
                'order' => 1,
            ],
            [
                'name' => 'Photoshop',
                'category' => 'Design',
                'icon' => 'bi bi-file-earmark-image',
                'proficiency' => 70,
                'is_featured' => false,
                'order' => 2,
            ],
            [
                'name' => 'Illustrator',
                'category' => 'Design',
                'icon' => 'bi bi-file-earmark-image',
                'proficiency' => 60,
                'is_featured' => false,
                'order' => 3,
            ],
        ];

        foreach ($skills as $skillData) {
            Skill::create($skillData);
        }
    }
}
