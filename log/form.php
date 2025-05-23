<?php
include '../header.php';

// Optional: Display error messages passed via GET (e.g., login.php?error=Invalid)
$error = $_GET['error'] ?? '';
?>

<div class="card p-4 " style="width: 400px; margin: auto;">
    <div class="card-body shadow mb-5 bg-body-tertiary rounded">
        <h3 class="card-title text-center mb-4">Login</h3>
        <?php if ($error): ?>
            <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <form method="post" action="login.php" name="loginForm"">
            <div class="mb-3">
                <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" name="pass" class="form-control" id="password"
                    placeholder="Enter your password" />
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" name="checkbox" type="checkbox" id="rememberMe" />
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <a href="#" class="small text-decoration-none">Forgot password?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <div class="text-center mt-3">
            <small>Don't have an account? <a href="#" class="text-primary text-decoration-none">Sign up</a></small>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>