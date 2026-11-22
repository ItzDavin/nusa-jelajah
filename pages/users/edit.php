<!DOCTYPE html>
<html lang="id">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NusaJelajah - Edit Profile</title>
    <link rel="stylesheet" href="../../styles/users/edit.css">
</head>
 
<body>
 
    <div class="edit-container">
 
        <div class="edit-header">
            <h1>USER INFORMATION</h1>
            <a href="profile.php" class="back-btn">Back</a>
        </div>
 
        <div class="edit-content">
 
            <div class="profile-picture">
                <img src="../../images/home/user.png" alt="User Profile">
            </div>
 
            <form action="#" method="POST" class="edit-form">
 
                <div class="name-inputs">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input
                            type="text"
                            id="first_name"
                            name="first_name"
                            placeholder="..."
                        >
                    </div>
 
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input
                            type="text"
                            id="last_name"
                            name="last_name"
                            placeholder="..."
                        >
                    </div>
                </div>
 
                <div class="form-group about-group">
                    <label for="about">About You</label>
                    <input
                        type="text"
                        id="about"
                        name="about"
                        placeholder="..."
                    >
                </div>
 
                <div class="form-buttons">
                    <a href="profile.php" class="cancel-btn">Cancel</a>
                    <button type="submit" class="save-btn">Save</button>
                </div>
 
            </form>
 
        </div>
 
    </div>
 
</body>
</html>