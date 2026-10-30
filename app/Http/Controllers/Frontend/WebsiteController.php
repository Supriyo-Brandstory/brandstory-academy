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
use Illuminate\Support\Facades\Log;

class WebsiteController extends Controller
{
    public function sitemap()
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
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();

        return view('frontend.index', compact('seo'));
    }
    public function about()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.about', compact('seo'));
    }
    public function contact()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.contact', compact('seo'));
    }

    public function course_digital_marketing()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.digital-marketing-mastery', compact('seo'));
    }
    public function advanced_digital_marketing_boot_camp()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.advanced-digital-marketing-boot-camp', compact('seo'));
    }
    public function course_360_degree_digital_marketing()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.360-degree-digital-marketing-course', compact('seo'));
    }
    public function privacy_policy()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.privacy-policy', compact('seo'));
    }
    public function terms_and_conditions()
    {
        $currentRoute = request()->path();
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

            return view('frontend.blogs.details', compact('blog', 'seo'));
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



    public function store_enquery(Request $request)
    {
        // Validation - allow phone numbers with optional spaces, dashes, or + country code
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:100',
            'lastname' => 'nullable|string|max:100',
            'phone' => ['required', 'string', 'min:6', 'max:20', 'regex:/^[0-9+\s\-()]+$/'],
            'email' => 'nullable|email|max:150',
            'recaptcha_response' => 'required|string',
        ], [
            'phone.regex' => 'The phone number format is invalid. Please enter numbers only.',
        ]);

        // Check if JSON response is expected
        $fragment = $request->input('formFragment');
        $isJson = !empty($fragment) || $request->expectsJson() || $request->ajax();

        if ($validator->fails()) {
            if ($isJson) {
                return response()->json([
                    'status' => 'error',
                    'errors' => $validator->errors(),
                ], 422);
            }

            return back()
                ->withErrors($validator)
                ->withInput()
                ->withFragment('enquiryForm');
        }

        // Verify reCAPTCHA
        $secretKey = config('services.recaptcha.secret_key', env('RECAPTCHA_SECRET_KEY'));
        $recaptchaSuccess = false;

        if (!empty($secretKey) && !empty($request->recaptcha_response)) {
            try {
                $recaptcha = Http::asForm()->timeout(10)->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => $secretKey,
                    'response' => $request->recaptcha_response,
                ])->json();

                $recaptchaSuccess = ($recaptcha['success'] ?? false) && (($recaptcha['score'] ?? 0) >= 0.5);

                if (!$recaptchaSuccess) {
                    Log::warning('reCAPTCHA verification failed', [
                        'response' => $recaptcha,
                        'ip' => $request->ip(),
                    ]);
                }
            } catch (\Throwable $e) {
                Log::error('reCAPTCHA verification exception: ' . $e->getMessage());
                if (app()->environment('local')) {
                    $recaptchaSuccess = true;
                }
            }
        } elseif (app()->environment('local')) {
            $recaptchaSuccess = true;
        }

        if (!$recaptchaSuccess) {
            if ($isJson) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'reCAPTCHA failed. Please try again.',
                ], 403);
            }

            return back()
                ->withErrors(['recaptcha' => 'reCAPTCHA verification failed. Please try again.'])
                ->withInput()
                ->withFragment('enquiryForm');
        }

        // Save Enquiry to Database
        $fullName = trim($request->firstname . ' ' . ($request->lastname ?? ''));

        try {
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
        } catch (\Throwable $e) {
            Log::error('Failed to save enquiry in DB: ' . $e->getMessage(), [
                'name' => $fullName,
                'phone' => $request->phone,
                'email' => $request->email,
            ]);
        }

        // Monday.com CRM Integration
        $this->sendToMonday($fullName, $request);

        if ($isJson) {
            return response()->json([
                'status' => 'success',
                'message' => 'Your enquiry has been submitted!',
            ]);
        }

        return redirect()
            ->back()
            ->with('success', 'Your enquiry has been submitted!')
            ->withFragment('enquiryForm');
    }

    /**
     * Send lead data to Monday.com CRM
     */
    protected function sendToMonday(string $fullName, Request $request): void
    {
        $apiToken = config('services.monday.api_token');
        $boardId = config('services.monday.board_id', '5026862618');
        $groupId = config('services.monday.group_id', 'group_mm1474yh');

        if (empty($apiToken) || empty($boardId)) {
            Log::warning('Monday.com API token or Board ID is not configured.');
            return;
        }

        $itemName = !empty($fullName) ? $fullName : 'New Lead';
        $currentDate = date('Y-m-d');

        // Prepare column values for Monday CRM
        $columnValues = [
            'text_mm14tv3x' => (string) $request->firstname,
            'text_mm14cwv1' => (string) ($request->lastname ?? ''),
            'date_mm14en69' => [
                'date' => $currentDate,
            ],
        ];

        if (!empty($request->email)) {
            $columnValues['email_mm14t50t'] = [
                'email' => $request->email,
                'text' => $request->email,
            ];
        }

        if (!empty($request->phone)) {
            // Monday phone column requires numbers only (optional leading +) with no spaces, dashes, or brackets
            $cleanPhone = preg_replace('/[^0-9+]/', '', (string) $request->phone);
            if (!empty($cleanPhone)) {
                $phoneData = ['phone' => $cleanPhone];
                // Default to India (IN) for standard 10-digit Indian numbers without country code
                if (preg_match('/^[6-9]\d{9}$/', $cleanPhone)) {
                    $phoneData['countryShortName'] = 'IN';
                }
                $columnValues['phone_mm14c8j2'] = $phoneData;
            }
        }

        $message = (string) ($request->message ?? '');

        // Monday board dropdown only accepts exact defined labels:
        $validPrograms = [
            'Digital Marketing Mastery',
            'Advanced Digital Marketing Boot Camp',
            '360 Degree Digital Marketing',
        ];

        if (!empty($request->program)) {
            $matchedProgram = null;
            $trimmed = trim($request->program);
            foreach ($validPrograms as $validProg) {
                if (strcasecmp($validProg, $trimmed) === 0) {
                    $matchedProgram = $validProg;
                    break;
                }
            }

            if ($matchedProgram) {
                $columnValues['dropdown_mm14w9p6'] = $matchedProgram;
            } else {
                // If program does not match the dropdown choices, preserve it in the message notes
                $message = trim($message . "\nProgram Interested: " . $request->program);
            }
        }

        if (!empty($request->page_url)) {
            $message = trim($message . "\nPage URL: " . $request->page_url);
        }

        if (!empty($message)) {
            $columnValues['long_text_mm14c4bc'] = $message;
        }

        // Use GraphQL variables to prevent syntax/escaping issues with quotes or newlines
        $mutation = 'mutation ($boardId: ID!, $groupId: String!, $itemName: String!, $columnValues: JSON!) {
            create_item (
                board_id: $boardId,
                group_id: $groupId,
                item_name: $itemName,
                column_values: $columnValues
            ) {
                id
            }
        }';

        $payload = [
            'query' => $mutation,
            'variables' => [
                'boardId' => (string) $boardId,
                'groupId' => (string) $groupId,
                'itemName' => (string) $itemName,
                'columnValues' => json_encode($columnValues, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
            ],
        ];

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => $apiToken,
            ])->timeout(15)->post('https://api.monday.com/v2', $payload);

            $result = $response->json();

            if (!empty($result['errors'])) {
                Log::error('Monday.com GraphQL Error:', [
                    'errors' => $result['errors'],
                    'payload' => $payload,
                ]);
            } else {
                $itemId = $result['data']['create_item']['id'] ?? 'unknown';
                Log::info("Monday.com Item Created Successfully: ID {$itemId}");
            }
        } catch (\Throwable $e) {
            Log::error('Monday.com Request Failed: ' . $e->getMessage());
        }
    }


    public function gallery()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.gallery', compact('seo'));
    }
    public function reviews()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.reviews', compact('seo'));
    }
    public function placement()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.placement', compact('seo'));
    }
    public function courseList()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.course-list', compact('seo'));
    }
    public function new_digital_marketing()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.new-digital-marketing', compact('seo'));
    }
    public function seo_course_in_bangalore()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.seo-course-in-bangalore', compact('seo'));
    }
    public function ppc_course_in_bangalore()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.ppc-course-in-bangalore', compact('seo'));
    }
    public function social_media_marketing()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.social-media-marketing', compact('seo'));
    }
    public function ui_ux()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.ui-ux', compact('seo'));
    }
    public function web_design()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.web-design', compact('seo'));
    }
    public function graphic_design()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.graphic-design', compact('seo'));
    }
    public function video_editing()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.video-editing', compact('seo'));
    }
    public function one_day_session()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.course.one-day-session', compact('seo'));
    }

    public function digital_marketing_marathahalli()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.bengalore.digital-marketing_marathahalli', compact('seo'));
    }

    public function digital_marketing_btm_layout()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.bengalore.digital-marketing-btm-layout', compact('seo'));
    }

    public function digital_marketing_indiranagar()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.bengalore.digital-marketing_indiranagar', compact('seo'));
    }

    public function digital_marketing_koramangala()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.bengalore.digital-marketing_koramangala', compact('seo'));
    }

    public function digital_marketing_yelahanka()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.bengalore.digital-marketing_yelahanka', compact('seo'));
    }

    public function digital_marketing_malleswaram()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.bengalore.digital-marketing_malleswaram', compact('seo'));
    }

    public function digital_marketing_hsr_layout()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.bengalore.digital-marketing-hsr-layout', compact('seo'));
    }

    public function digital_marketing_rajajinagar()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.bengalore.digital-marketing_rajajinagar', compact('seo'));
    }

    public function digital_marketing_vijayanagar()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.bengalore.digital-marketing_vijayanagar', compact('seo'));
    }

    public function digital_marketing_jayanagar()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.bengalore.digital-marketing_jayanagar', compact('seo'));
    }

    public function digital_marketing_hebbal()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.bengalore.digital-marketing-hebbal', compact('seo'));
    }

    public function digital_marketing_electronic_city()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.bengalore.digital-marketing-electronic-city', compact('seo'));
    }

    public function digital_marketing_ombr_layout()
    {
        $currentRoute = request()->path();
        $seo = SEO::where('page_url', $currentRoute)->first();
        return view('frontend.bengalore.digital-marketing_ombr-layout', compact('seo'));
    }
}
