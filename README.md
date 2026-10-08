<<<<<<< HEAD
# help-center-practice
=======
# Help Center - DevOps Practice Project

A small Laravel/PHP Help Center application created for practicing a complete DevOps workflow.

## Current application

The application contains:

- Help Center home page
- Docker category
- Kubernetes category
- Linux category
- DevOps category
- Article pages
- Laravel routes
- Laravel controller
- Blade views

## Run locally

Requirements:

- PHP 8.2+
- Composer

Install dependencies:

```bash
composer install
```

Create environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Run the application:

```bash
php artisan serve
```

Open:

http://127.0.0.1:8000

## DevOps practice roadmap

Do these later, one step at a time:

1. Push source code to Git
2. Create Dockerfile
3. Build Docker image
4. Run container locally
5. Create Docker Compose setup
6. Add Jenkins/Azure DevOps CI pipeline
7. Add SonarQube source-code scanning
8. Add Trivy image scanning
9. Push image to a container registry
10. Create Kubernetes Deployment
11. Create Kubernetes Service
12. Add ConfigMap and Secret
13. Add readiness/liveness probes
14. Add Ingress
15. Deploy to Kubernetes
16. Troubleshoot Pods and application
17. Add resource requests/limits
18. Add Horizontal Pod Autoscaler
19. Add monitoring

Do not add all of these at once. Build the DevOps workflow step by step.
>>>>>>> 603ba94 (Initial commit)
