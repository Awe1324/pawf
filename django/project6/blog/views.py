from django.shortcuts import get_object_or_404, render # upadate

from .models import Post


def post_list(request):
    posts = Post.objects.all()
    return render(request, "home.html", {"posts": posts})

# add
def post_detail(request, pk):
    post = get_object_or_404(Post, pk=pk)
    return render(request, "post_detail.html", {"post": post})

from django.shortcuts import render
from django.views.generic import TemplateView


class About(TemplateView):
    template_name = "about.html"

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["contact_address"] = "123 Main Street"
        context["phone_number"] = "555-555-5555"
        return context
