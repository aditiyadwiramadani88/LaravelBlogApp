simple wesite blog using laravel framework and Tailwind css
# Install
```sh 
composer install 
```

```sh 
 cp .env.example .env
```
make the name of my_blog in the mysql database
```sh 
php artisan migrate 

```


```sh
php artisan serve 

```
The first thing to do is register, I'm the first to make is admin


<table>
  <tr>
    <th>Url</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>https://example.com/all_post</td>
  <td>All Post</td>

  </tr>
  <tr>
  <td>https://example.com/admin/create_post</td>
    <td>Create Post</td>
  </tr>
  <tr>
  <td>https://example.com/admin/update_post/{slug}</td>
    <td>Update Post</td>
  </tr>
  <tr>
  <td>https://example.com/admin/delete_post/{slug}</td>
    <td>Delete Post</td>
  </tr>
  <tr>
  <td>https://example.com/post/{slug}</td>
    <td>Get Post</td>
  </tr>
</table>
 

