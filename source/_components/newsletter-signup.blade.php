<div class="flex justify-center lg:-mx-12 my-12 p-6 md:px-12 border border-gray-400 text-sm md:rounded shadow">
    <!-- Begin Mailchimp Signup Form -->
    <div id="mc_embed_signup">
        <form action="https://jcos.us2.list-manage.com/subscribe/post?u=336c39b8d79a8efdfba95cedd&amp;id=6afc8fe234&amp;f_id=001eb2e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
                <h2>Sign up for newsletter</h2>
                <div class="mc-field-group">
                    <label for="mce-EMAIL">Email Address </label>
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email address">
                </div>
                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_25582686a9fc051afd5453557_189578c854" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
        </form>
    </div>
    <!--End Mailchimp Signup Form -->
</div>

<div class="flex justify-center lg:-mx-12 my-12 p-6 md:px-12 border border-gray-400 text-sm md:rounded shadow">
    <!-- Begin Support section -->
    <div id="mc_embed_signup_scroll">
        <h2>💸 Want to support me?</h2>
        <p>
            I offer some of the highest-quality Buyer’s Remorse.
        </p>

        <div class="text-center cta">

            <a title="{{ $page->siteName }} Support" href="/support"
               class="text-xl text-[#a9a9b3]">
                👉 Get Buyer’s Remorse
            </a>

        </div>
    </div>
    <!-- End Support section -->
</div>

@push('scripts')
    <script src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script>(function($) {
        window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);
    </script>
@endpush

<style>
    .cta {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        --tw-text-opacity: 1;
        color: rgb(169 169 179 / var(--tw-text-opacity, 1));
        --tw-bg-opacity: 1;
        background-color: rgb(59 61 66 / var(--tw-bg-opacity, 1));
        line-height: 1.6;
        border-radius: 0.25rem;
        cursor: pointer;
    }

    .cta:hover a {
        --tw-text-opacity: 1;
        color: rgb(185 145 40 / var(--tw-text-opacity, 1));
        color: #b99128;
        text-decoration: underline !important;
        transition: all 0.5s ease 0s;
    }
</style>