from django.db import models
from django.contrib.auth.models import User





class Category(models.Model):
    name = models.CharField(max_length=100, unique=True)

    class Meta:
        verbose_name = "Category"
        verbose_name_plural = "Categories"

    def __str__(self):
        return self.name


class Post(models.Model):

    STATUS_CHOICES = [
        ("Pending", "Pending"),
        ("Published", "Published"),
        ("Rejected", "Rejected"),
    ]

    title = models.CharField(max_length=200)

    author_name = models.CharField(max_length=100)

    author_email = models.EmailField()

    category = models.ForeignKey(
        Category,
        on_delete=models.CASCADE
    )

    thumbnail = models.ImageField(
        upload_to="posts/",
        blank=True,
        null=True
    )

    summary = models.TextField()

    body = models.TextField()

    status = models.CharField(
        max_length=20,
        choices=STATUS_CHOICES,
        default="Pending"
    )

    approved_by = models.ForeignKey(
        User,
        on_delete=models.SET_NULL,
        blank=True,
        null=True
    )

    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.title