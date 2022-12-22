<?php
// Template Name: Profile

if (!is_user_logged_in()) {
    wp_redirect(home_url());
    exit;
}

$user = wp_get_current_user();
$email = $user->user_email;
$first_name = $user->first_name;
$last_name = $user->last_name;
$username = $user->user_login;
$password = $user->user_pass;
$user_id = get_current_user_id();
$customer = get_field('customer_hospital', 'user_' . $user_id);

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <form id="profile-form" class="p-8 mx-auto my-48 shadow mw-640 white p-sm-16 p-lg-24 radius" action="">

            <h2><?php echo __('Account information', 'lightning'); ?></h2>

            <fieldset>
                <div class="d-flex align-items-center">
                    <div class="form-group me-12 me-md-48">
                        <label for="username"><?php echo __('User name', 'lightning'); ?></label>
                        <p id="username"><?php echo $username; ?></p>
                    </div>
                    <div class="form-group">
                        <label for="customer"><?php echo __('Customer (Hospital)', 'lightning'); ?></label>
                        <p id="customer"><?php echo $customer; ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="user_email"><?php echo __('Email', 'lightning'); ?></label>
                    <input type="email" name="user_email" id="email" value="<?php echo $email; ?>">
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    <label for="first_name"><?php echo __('First name', 'lightning'); ?></label>
                    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>">

                    <label for="last_name"><?php echo __('Last name', 'lightning'); ?></label>
                    <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>">
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    <label for="user_pass"><?php echo __('New password', 'lightning'); ?></label>
                    <input type="password" name="user_pass" id="password" value="<?php echo $password; ?>">
                </div>

                <div class="form-group">
                    <label for="password_confirm"><?php echo __('Confirm new password', 'lightning'); ?></label>
                    <input type="password" name="password_confirm" id="password_confirm" value="<?php echo $password; ?>">
                </div>
            </fieldset>

            <div class="d-flex justify-content-between">
                <div class="form-group d-flex align-items-center">
                    <button id="update-profile-btn" class="update-profile-btn btn-primary"><?php echo __('Save', 'lightning'); ?></button>
                    <div class="update-message ms-16"></div>
                </div>

                <div class="form-group d-flex align-items-center">
                    <button class="px-8 delete-profile"><?php echo __('Delete account', 'lightning'); ?></button>
                    <div class="text-center delete-message ms-16 d-none">
                        <p class="mb-0 small"><strong><?php echo __('Are you sure?', 'lightning'); ?></strong></p>
                        <div>
                            <button class="px-8 delete-profile-confirm small" style="color: red;"><?php echo __('Yes', 'lightning'); ?></button>
                            <button class="px-8 delete-profile-cancel small"><?php echo __('Cancel', 'lightning'); ?></button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</main>

<?php
get_footer();
?>