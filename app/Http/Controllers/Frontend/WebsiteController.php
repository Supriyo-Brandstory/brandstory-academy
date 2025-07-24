<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogSubCategory;
use App\Models\SEO;
use App\Models\Sitemap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
class WebsiteController extends Controller
{  public function sitemap()
    {
        // Fetch sitemap data from the database
        $sitemap = Sitemap::first();

        // Return the view with the XML content and set the correct content type
        return Response::make(view('frontend.sitemap', compact('sitemap')), 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
    public function index()
    {
         $currentRoute = request()->path();;
        $seo = SEO::where('page_url', $currentRoute)->first();

        return view('frontend.index', compact('seo'));
    }
    public function about()
    {
          $currentRoute = request()->path();;
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.about', compact('seo'));
        
    }
    public function contact(){
          $currentRoute = request()->path();;
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.contact', compact('seo'));
    }

    public function course_digital_marketing(){
          $currentRoute = request()->path();;
        $seo = SEO::where('page_url', $currentRoute)->first();
    return view('frontend.course.digital-marketing-mastery', compact('seo'));
    }
    public function advanced_digital_marketing_boot_camp(){
          $currentRoute = request()->path();;
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.advanced-digital-marketing-boot-camp', compact('seo'));
    }
    public function course_360_degree_digital_marketing(){
          $currentRoute = request()->path();;
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.360-degree-digital-marketing-course', compact('seo'));
    }
    public function privacy_policy(){
          $currentRoute = request()->path();;
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.privacy-policy', compact('seo'));
    }
    public function terms_and_conditions(){
          $currentRoute = request()->path();;
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.terms-and-conditions', compact('seo'));
    }

    public function blogs(Request $request)
    {
        // Fetch the search query
        $searchQuery = $request->query('search');
    
        if ($searchQuery) {
            // Search blogs by title or content
            $allBlogs = Blog::where('title', 'like', '%' . $searchQuery . '%')
                ->orWhere('content', 'like', '%' . $searchQuery . '%')
                ->orderBy('id', 'desc')
                ->paginate(15);
    
            $categories = BlogCategory::with('subCategories')->get();
    
            // Pass search query to the view for display in the search bar
            return view('frontend.blogs.index', compact('categories', 'allBlogs', 'searchQuery'));
        }
    
        // Fetch the latest 3 blogs for the banner/featured section
        $latestBlogs = Blog::orderBy('id', 'desc')->take(1)->get();
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        // Exclude the latest 3 blogs from the main list of all blogs
        $allBlogs = Blog::whereNotIn('id', $latestBlogs->pluck('id'))->orderBy('id', 'desc')->paginate(15);
    
        // Fetch categories with their subcategories
        $categories = BlogCategory::with('subCategories')->get();
    
        // You can set the banner here (e.g., static content or dynamic query)
        $banner = "Your Banner Content";
    
        // Pass variables to the view
        return view('frontend.blogs.index', compact('categories', 'allBlogs', 'latestBlogs', 'banner', 'seo'));
    }
    
    
    public function blogsVariation(Request $request, $slug)
    {
        // Check if the slug matches a blog category
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();


        $category = BlogCategory::where('slug', $slug)->first();
    
        // Check if it's a blog post slug
        $blog = Blog::join('blog_sub_categories', 'blog_sub_categories.id', '=', 'blogs.blog_sub_category_id')
            ->join('blog_categories', 'blog_categories.id', '=', 'blog_sub_categories.blog_category_id')
            ->select('blogs.*', 'blog_categories.name as category_name', 'blog_sub_categories.name as sub_category_name')
            ->where('blogs.slug', $slug)
            ->first();
    
            if ($blog) {
                $blogSeoData = [];
            
                if ($seo && !empty($seo->script)) {
                    preg_match('/<title>(.*?)<\/title>/', $seo->script, $titleMatch);
                    preg_match('/<meta name="description" content="(.*?)"/', $seo->script, $descriptionMatch);
            
                    $blogSeoData = [
                        'title' => $titleMatch[1] ?? null,
                        'meta_description' => $descriptionMatch[1] ?? null,
                        'canonical_url' => isset($seo->page_url) ? url($seo->page_url) : null,
                        'image' => $blog->image ?? null,
                    ];
                }
            
                return view('frontend.blogs.details', compact('blog', 'blogSeoData'));
            }
            
    
        // If a search query exists
        if ($request->has('search') && !empty($request->input('search'))) {
            $searchTerm = $request->input('search');
            $allBlogs = Blog::where('title', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('content', 'LIKE', '%' . $searchTerm . '%')
                ->orderBy('id', 'desc')
                ->paginate(15);
        } elseif (!$category) {
            $subcategory = BlogSubCategory::where('slug', $slug)->first();
            if (!$subcategory) {
                abort(404, 'Category or Subcategory not found');
            }
    
            $allBlogs = Blog::where('blog_sub_category_id', $subcategory->id)->orderBy('id', 'desc')->paginate(15);
            $categories = BlogCategory::with('subCategories')->get();
            $category = $subcategory;
            
            return view('frontend.blogs.index', compact('allBlogs', 'categories', 'category', 'seo'));
        } else {
            $subCategoryIds = BlogSubCategory::where('blog_category_id', $category->id)->pluck('id');
            $allBlogs = Blog::whereIn('blog_sub_category_id', $subCategoryIds)->orderBy('id', 'desc')->paginate(15);
        }
      
        $categories = BlogCategory::with('subCategories')->get();
       
        return view('frontend.blogs.index', compact('allBlogs', 'categories', 'category', 'seo'));
    }
    

 // Make sure this is at the top of your controller

public function store_enquery(Request $request)
{
    // ✅ Manually validate so we can add ->withFragment
    $validator = Validator::make($request->all(), [
        'firstname' => 'required|string',
        'lastname' => 'required|string',
        'phone' => 'required|digits_between:6,15',
        'recaptcha_response' => 'required|string',
    ]);

    if ($validator->fails()) {
        return back()
            ->withErrors($validator)
            ->withInput()
            ->withFragment('enquiryForm'); // 👈 Scroll to form on error
    }

    // ✅ Verify reCAPTCHA token with Google
    $recaptcha = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => env('RECAPTCHA_SECRET_KEY'),
        'response' => $request->recaptcha_response,
    ])->json();

    if (!($recaptcha['success'] ?? false) || ($recaptcha['score'] ?? 0) < 0.5) {
        return back()
            ->withErrors(['recaptcha' => 'reCAPTCHA failed. Try again.'])
            ->withInput()
            ->withFragment('enquiryForm'); // 👈 Scroll to form on reCAPTCHA fail
    }

    // ✅ Save the enquiry
    $fullName = trim($request->firstname . ' ' . $request->lastname);

    Enquiry::create([
        'name' => $fullName,
        'phone' => $request->phone,
        'email' => $request->email,
        'message' => $request->message,
        'program' => $request->program,
        'terms_accepted' => $request->has('termsAndConditions-Consent'),
        'recaptcha_response' => 'Validated',
        'page_url' => $request->page_url,
    ]);

    // ✅ Redirect back with success and scroll to form
    return redirect()
        ->back()
        ->with('success', 'Your enquiry has been submitted!')
        ->withFragment('enquiryForm');
}

}
