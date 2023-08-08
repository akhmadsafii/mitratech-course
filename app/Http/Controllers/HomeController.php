<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index()
    {
        $apiKey = '623b44fc27e94958bbf094e4f7fbed5f';
        $articles = $this->getNewsArticles($apiKey);
        $posts = array_slice($articles, 0, 11);
        $courses =  include storage_path('course_data.php');
        $courses = array_slice($courses, 0, 7);
        return view('content.public.v_index', compact('posts', 'courses'));
    }

    public function blog()
    {
        $apiKey = '623b44fc27e94958bbf094e4f7fbed5f';
        $posts = $this->getNewsArticles($apiKey);

        $perPage = 10;
        $currentPage = request()->query('page', 1);
        $postsPaginated = new LengthAwarePaginator(
            array_slice($posts, ($currentPage - 1) * $perPage, $perPage),
            count($posts),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );
        return view('content.public.v_post', compact('postsPaginated'));
    }

    public function course()
    {
        $courses = include storage_path('course_data.php');

        $perPage = 10;
        $currentPage = request()->query('page', 1);

        $coursesPaginated = new LengthAwarePaginator(
            array_slice($courses, ($currentPage - 1) * $perPage, $perPage),
            count($courses),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );
        return view('content.public.v_course', compact('coursesPaginated'));
    }

    public function getNewsArticles($apiKey, $query = 'teknologi', $language = 'id')
    {
        $url = "https://newsapi.org/v2/everything?q=$query&language=$language&apiKey=$apiKey";
        $client = new Client();
        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);
        $articles = $data['articles'];
        usort($articles, function ($a, $b) {
            return strtotime($b['publishedAt']) - strtotime($a['publishedAt']);
        });

        return $articles;
    }
}
