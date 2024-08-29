<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <x-app-layout>
        <x-slot name="header">
            <head>
                <meta charset="utf-8">
                <title>Blog</title>
            </head>
        </x-slot>
        <body>
            <h1>Blog Name</h1>
            
            <form action="/posts" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="category">
                    <h2>Category</h2>
                    <select name="post[category_id]">
                        <option selected disabled value="">--</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <p class="category__error" style="color:red">{{ $errors->first('post.category') }}</p>
                </div>
                <div class="title">
                    <h2>Title</h2>
                    <input type="text" name="post[title]" placeholder="タイトル" value={{ old('post.title') }}>
                    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class="image">
                    <h2>Image</h2>
                    <input type="file" name="image">
                </div>
                <div class="body">
                    <h2>Body</h2>
                    <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <input type="submit" value="store"/>
            </form>
            <div class="back"><a href="/">back</a></div>
        </body>
    </x-app-layout>
</html>