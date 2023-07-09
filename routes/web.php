<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Index;
use App\Http\Livewire\About;
use App\Http\Livewire\AcronisBackup;
use App\Http\Livewire\Blog;
use App\Http\Livewire\BlogDetails;
use App\Http\Livewire\BusinessEmail;
use App\Http\Livewire\CancellationRefund;
use App\Http\Livewire\Cloud;
use App\Http\Livewire\CodeguardBackup;
use App\Http\Livewire\ContactUs;
use App\Http\Livewire\DedicatedServer;
use App\Http\Livewire\DomainTransfer;
use App\Http\Livewire\EnterpriseEmail;
use App\Http\Livewire\Faqs;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\FreeWithDomain;
use App\Http\Livewire\GoogleWorkspace;
use App\Http\Livewire\Index2; 
use App\Http\Livewire\Index3; 
use App\Http\Livewire\Legal;     
use App\Http\Livewire\LinuxResellerHosting;     
use App\Http\Livewire\LinuxSharedHosting;     
use App\Http\Livewire\Login;     
use App\Http\Livewire\Login2;     
use App\Http\Livewire\NameSuggestionTool;     
use App\Http\Livewire\NewDomainExtensions;     
use App\Http\Livewire\PaymentOptions;     
use App\Http\Livewire\PremiumDomains;     
use App\Http\Livewire\PrivacyPolicy;     
use App\Http\Livewire\ProfessionalCloud;     
use App\Http\Livewire\RegisterDomain;     
use App\Http\Livewire\Register;     
use App\Http\Livewire\Register2;     
use App\Http\Livewire\Sitelock;     
use App\Http\Livewire\SslCertificates;     
use App\Http\Livewire\Switcher;     
use App\Http\Livewire\TermsOfService;     
use App\Http\Livewire\UnderMaintenance;     
use App\Http\Livewire\VirtualserverLinuxHosting;     
use App\Http\Livewire\WebsiteBuilder;     
use App\Http\Livewire\Weebly;     
use App\Http\Livewire\WhoisLookup;     
use App\Http\Livewire\WindowsDedicatedServer;     
use App\Http\Livewire\WindowsResellerHosting;     
use App\Http\Livewire\WindowsSharedHosting;     
use App\Http\Livewire\WordpressSharedHosting;     

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', Index::class);
Route::get('index', Index2::class);
Route::get('about', About::class);
Route::get('acronis-backup', AcronisBackup::class);
Route::get('blog', Blog::class);
Route::get('blog-details', BlogDetails::class);
Route::get('business-email', BusinessEmail::class);
Route::get('cancellation-refund', CancellationRefund::class);
Route::get('cloud', Cloud::class);
Route::get('codeguard-backup', CodeguardBackup::class);
Route::get('contact-us', ContactUs::class);
Route::get('dedicated-server', DedicatedServer::class);
Route::get('domain-transfer', DomainTransfer::class);
Route::get('enterprise-email', EnterpriseEmail::class);
Route::get('faqs', Faqs::class);
Route::get('forgot-password', ForgotPassword::class);
Route::get('free-with-domain', FreeWithDomain::class);
Route::get('google-workspace', GoogleWorkspace::class);
Route::get('index2', Index2::class);
Route::get('index3', Index3::class);
Route::get('legal', Legal::class);
Route::get('linux-reseller-hosting', LinuxResellerHosting::class);
Route::get('linux-shared-hosting', LinuxSharedHosting::class);
Route::get('login', Login::class);
Route::get('login2', Login2::class);
Route::get('name-suggestion-tool', NameSuggestionTool::class);
Route::get('new-domain-extensions', NewDomainExtensions::class);
Route::get('payment-options', PaymentOptions::class);
Route::get('premium-domains', PremiumDomains::class);
Route::get('privacy-policy', PrivacyPolicy::class);
Route::get('professional-cloud', ProfessionalCloud::class);
Route::get('register-domain', RegisterDomain::class);
Route::get('register', Register::class);
Route::get('register2', Register2::class);
Route::get('sitelock', Sitelock::class);
Route::get('ssl-certificates', SslCertificates::class);
Route::get('switcher', Switcher::class);
Route::get('terms-of-service', TermsOfService::class);
Route::get('under-maintenance', UnderMaintenance::class);
Route::get('virtualserver-linux-hosting', VirtualserverLinuxHosting::class);
Route::get('website-builder', WebsiteBuilder::class);
Route::get('weebly', Weebly::class);
Route::get('whois-lookup', WhoisLookup::class);
Route::get('windows-dedicated-server', WindowsDedicatedServer::class);
Route::get('windows-reseller-hosting', WindowsResellerHosting::class);
Route::get('windows-shared-hosting', WindowsSharedHosting::class);
Route::get('wordpress-shared-hosting', WordpressSharedHosting::class);