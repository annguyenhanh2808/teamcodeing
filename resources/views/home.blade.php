<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('AdminComponent/style.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
</head>
<body>
<div class="container">
    <aside>
        <div class="top">
            <div class="logo">
                <img src="{{asset('AdminComponent/img/logo.svg')}}" alt="logo">
                <h1> <span class="logo-text">Idea</span></h1>
            </div>
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">close </span>
            </div>
        </div>

        <div class="sidebar">
            <a href="#" class="active">
                <span class="material-icons-sharp">person_add</span>
                <h3>Create Account</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">emoji_objects</span>
                <h3>Set Idea</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">tips_and_updates</span>
                <h3>Most Popular Idea</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">visibility</span>
                <h3>Most Viewed Idea</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">on_device_training</span>
                <h3>Lastest Idea</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">question_answer</span>
                <h3>Lastest Comment</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
    </aside>

    <!-- =========================== END OF ASIDE ============================ -->
    <main>
        <h1>Create Account</h1>
        <div class="account-list">
            <h2>List of Account</h2>
            <table>
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Role</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>nam123</td>
                    <td>1212</td>
                    <td>0918000000</td>
                    <td>Hanoi</td>
                    <td>Male</td>
                    <td>10/11/1999</td>
                    <td>Staff</td>
                </tr>
                <tr>
                    <td>nam123</td>
                    <td>1212</td>
                    <td>0918000000</td>
                    <td>Hanoi</td>
                    <td>Male</td>
                    <td>10/11/1999</td>
                    <td>Staff</td>
                </tr>
                <tr>
                    <td>nam123</td>
                    <td>1212</td>
                    <td>0918000000</td>
                    <td>Hanoi</td>
                    <td>Male</td>
                    <td>10/11/1999</td>
                    <td>Staff</td>
                </tr>
                <tr>
                    <td>nam123</td>
                    <td>1212</td>
                    <td>0918000000</td>
                    <td>Hanoi</td>
                    <td>Male</td>
                    <td>10/11/1999</td>
                    <td>Staff</td>
                </tr>
                <tr>
                    <td>nam123</td>
                    <td>1212</td>
                    <td>0918000000</td>
                    <td>Hanoi</td>
                    <td>Male</td>
                    <td>10/11/1999</td>
                    <td>Staff</td>
                </tr>
                </tbody>
            </table>
            <a href="#">Show All</a>
        </div>
    </main>

    <!-- ======================================================= -->
    <div class="right">
        <div class="top">
            <div class="profile">
                <div class="info">
                    <p>Hey, Nam</p>
                    <small class="text-muted">Admin</small>
                </div>
                <div class="profile-photo">
                    <img src="{{asset('AdminComponent/img/Person.jpg')}}}" alt="">
                </div>
            </div>
        </div>

        <h2>Create new</h2>

        <form action="#" class="sign-up-form">
            <div class="input-field">
                <span class="material-icons-sharp">person</span>
                <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
                <span class="material-icons-sharp">lock</span>
                <input type="password" placeholder="Password" />
            </div>
            <div class="input-field">
                <span class="material-icons-sharp">lock</span>
                <input type="password" placeholder="Confirm Password" />
            </div>
            <div class="input-field">
                <span class="material-icons-sharp">call</span>
                <input type="text" placeholder="Phone" />
            </div>
            <div class="input-field">
                <span class="material-icons-sharp">home</span>
                <input type="text" placeholder="Address" />
            </div>
            <div class="input-field">
                <span class="material-icons-sharp">transgender</span>
                <input type="text" placeholder="Gender" />
            </div>
            <div class="input-field">
                <span class="material-icons-sharp">date_range</span>
                <input class="date" type="" placeholder="Date of Birth" st/>
            </div>
            <div class="input-field">
                <span class="material-icons-sharp">supervisor_account</span>
                <input type="text" placeholder="Role" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
        </form>
    </div>
</div>
</body>
</html>
