from django.contrib import admin
from .models import Category, Post



@admin.register(Category)
class CategoryAdmin(admin.ModelAdmin):
    list_display = ("name",)
    search_fields = ("name",)


@admin.register(Post)
class PostAdmin(admin.ModelAdmin):

    list_display = (
        "title",
        "author_name",
        "author_email",
        "category",
        "status",
        "created_at",
    )

    list_filter = (
        "status",
        "category",
        "created_at",
    )

    search_fields = (
        "title",
        "author_name",
        "author_email",
        "summary",
        "body",
    )

    ordering = ("-created_at",)