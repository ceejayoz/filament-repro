# To install

```
touch database/database.sqlite
composer install
php artisan storage:link
php artisan make:filament-user
```

# To reproduce

1. Run `php artisan serve` and open `http://localhost:8000/admin` in the browser.
2. Navigate to "Samples" and click "New sample".
3. Upload an image, save the Sample.
4. In `php artisan tinker`, `Spatie\MediaLibrary\MediaCollections\Models\Media::all()` will show that a Media item has been created.
5. In Filament, open the newly created Sample for editing.
6. Hit the "X" button on the image to remove it, but do not save it yet.
7. In `php artisan tinker` again, `Spatie\MediaLibrary\MediaCollections\Models\Media::all()` will reveal the Media item has already been deleted.
8. Hit "Cancel" in the Filament dialog.
9. Refresh the list view. Note that the Media item in the list view has disappeared.
 
