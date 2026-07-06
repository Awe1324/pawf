from django.shortcuts import render, get_object_or_404
from posts.models import Post, Category


def blog_list(request):

    posts = Post.objects.filter(status="Published").order_by("-created_at")

    categories = Category.objects.all()

    search = request.GET.get("search")

    category = request.GET.get("category")

    if search:
        posts = posts.filter(title__icontains=search)

    if category:
        posts = posts.filter(category__id=category)

    context = {
        "posts": posts,
        "categories": categories,
    }

    return render(request, "blog/blog.html", context)


def blog_detail(request, id):

    post = get_object_or_404(Post, id=id)

    related_posts = Post.objects.filter(
        category=post.category,
        status="Published"
    ).exclude(id=post.id)[:3]

    context = {
        "post": post,
        "related_posts": related_posts
    }

    return render(request, "blog/detail.html", context)