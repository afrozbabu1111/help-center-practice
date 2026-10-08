<?php

namespace App\Http\Controllers;

class HelpCenterController extends Controller
{
    private array $categories = [
        'docker' => [
            'name' => 'Docker',
            'description' => 'Learn Docker containers, images, networking and troubleshooting.',
        ],
        'kubernetes' => [
            'name' => 'Kubernetes',
            'description' => 'Learn Kubernetes Pods, Deployments, Services and troubleshooting.',
        ],
        'linux' => [
            'name' => 'Linux',
            'description' => 'Linux commands and common system administration topics.',
        ],
        'devops' => [
            'name' => 'DevOps',
            'description' => 'CI/CD, automation and DevOps practices.',
        ],
    ];

    private array $articles = [
        [
            'id' => 1,
            'category' => 'docker',
            'title' => 'What is Docker?',
            'slug' => 'what-is-docker',
            'content' => 'Docker is a platform used to build, package and run applications inside containers.',
        ],
        [
            'id' => 2,
            'category' => 'docker',
            'title' => 'What is a Docker Image?',
            'slug' => 'what-is-a-docker-image',
            'content' => 'A Docker image is a read-only template used to create containers.',
        ],
        [
            'id' => 3,
            'category' => 'kubernetes',
            'title' => 'What is a Pod?',
            'slug' => 'what-is-a-pod',
            'content' => 'A Pod is the smallest deployable unit in Kubernetes and can contain one or more containers.',
        ],
        [
            'id' => 4,
            'category' => 'kubernetes',
            'title' => 'What is a Kubernetes Service?',
            'slug' => 'what-is-kubernetes-service',
            'content' => 'A Kubernetes Service provides a stable network endpoint for a group of Pods.',
        ],
        [
            'id' => 5,
            'category' => 'linux',
            'title' => 'How to Check Disk Usage?',
            'slug' => 'check-disk-usage',
            'content' => 'Use the df -h command to view filesystem disk usage in a human-readable format.',
        ],
        [
            'id' => 6,
            'category' => 'devops',
            'title' => 'What is CI/CD?',
            'slug' => 'what-is-ci-cd',
            'content' => 'CI/CD automates building, testing and delivering applications.',
        ],
    ];

    public function index()
    {
        return view('help-center.index', [
            'categories' => $this->categories,
            'articles' => $this->articles,
        ]);
    }

    public function category(string $category)
    {
        abort_unless(isset($this->categories[$category]), 404);

        $categoryArticles = array_filter(
            $this->articles,
            fn ($article) => $article['category'] === $category
        );

        return view('help-center.category', [
            'category' => $this->categories[$category],
            'articles' => $categoryArticles,
        ]);
    }

    public function article(string $article)
    {
        $result = collect($this->articles)->firstWhere('slug', $article);

        abort_if(!$result, 404);

        return view('help-center.article', [
            'article' => $result,
        ]);
    }
}
