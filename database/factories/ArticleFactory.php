<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titles = [
            'Getting Started with Laravel 11: A Complete Guide',
            'Building Modern UIs with React and Tailwind CSS',
            'Mastering Database Optimization in Laravel',
            'The Future of Web Development: Trends to Watch',
            'Creating RESTful APIs with Laravel Sanctum',
        ];

        $title = fake()->unique()->randomElement($titles);
        $slug = \Illuminate\Support\Str::slug($title) . '-' . fake()->unique()->numberBetween(1, 10000);

        $content = $this->generateMarkdownContent();

        return [
            'title' => $title,
            'slug' => $slug,
            'excerpt' => fake()->paragraph(2),
            'content' => $content,
            'published_at' => fake()->dateTimeBetween('-3 months', 'now'),
            'image' => 'https://picsum.photos/seed/' . $slug . '/1200/630',
        ];
    }

    private function generateMarkdownContent(): string
    {
        return <<<'MARKDOWN'
# Introduction

Web development has evolved significantly over the past decade. Modern frameworks like **Laravel** and **React** have revolutionized how we build applications, making development faster, more secure, and more enjoyable.

## Why Laravel?

Laravel is a powerful PHP framework that provides:

- **Elegant syntax** that makes code readable and maintainable
- **Built-in authentication** and authorization systems
- **Eloquent ORM** for database interactions
- **Blade templating** engine for beautiful views

```php
// Example: Creating a simple route
Route::get('/articles', [ArticleController::class, 'index']);
```

## Modern Frontend Development

The frontend landscape has changed dramatically with the introduction of component-based frameworks. React, Vue, and others have made it possible to build complex, interactive user interfaces with ease.

### Key Benefits

1. **Component Reusability** - Write once, use everywhere
2. **Virtual DOM** - Faster rendering and better performance
3. **Rich Ecosystem** - Thousands of packages and tools
4. **Strong Community** - Active support and continuous improvements

## Best Practices

When building modern web applications, consider these best practices:

- Use **version control** (Git) for all projects
- Write **clean, documented code**
- Implement **automated testing**
- Follow **security best practices**
- Optimize for **performance**

> "The best code is no code at all. Every line of code you write is a liability." - Jeff Atwood

## Conclusion

Whether you're building a simple blog or a complex enterprise application, choosing the right tools and following best practices will set you up for success. Laravel and modern JavaScript frameworks provide an excellent foundation for any web project.

Happy coding! 🚀
MARKDOWN;
    }
}
