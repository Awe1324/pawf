from django.shortcuts import render, redirect
from posts.models import Category, Post
from posts.forms import SubmitPostForm


def home(request):

    categories = Category.objects.all()

    latest_posts = Post.objects.filter(
        status="Published"
    ).order_by("-created_at")[:3]

    return render(
        request,
        "pages/home.html",
        {
            "categories": categories,
            "latest_posts": latest_posts,
        },
    )


def about(request):
    return render(request, "pages/about.html")


def contact(request):
    return render(request, "pages/contact.html")


def submit_article(request):
    if request.method == "POST":
        form = SubmitPostForm(request.POST, request.FILES)

        if form.is_valid():
            form.save()
            print("DATA BERHASIL DISIMPAN")
            return redirect("home")
        else:
            print(form.errors)

    else:
        form = SubmitPostForm()

    return render(request, "pages/submit.html", {"form": form})

