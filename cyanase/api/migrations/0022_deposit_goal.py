# Generated by Django 4.1.3 on 2023-05-23 11:15

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('api', '0021_remove_deposit_goal'),
    ]

    operations = [
        migrations.AddField(
            model_name='deposit',
            name='goal',
            field=models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.CASCADE, to='api.goal'),
        ),
    ]