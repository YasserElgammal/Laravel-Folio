<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Add a gray background color with some padding */
        body {
            font-family: Arial;
            padding: 20px;
            background: #f1f1f1;
        }

        /* Header/Blog Title */
        .header {
            padding: 30px;
            font-size: 40px;
            text-align: center;
            background: white;
        }

        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
            float: left;
            width: 75%;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            width: 25%;
            padding-left: 20px;
        }

        /* Fake image */
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
        }

        /* Add a card effect for articles */
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
            margin-top: 20px;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {

            .leftcolumn,
            .rightcolumn {
                width: 100%;
                padding: 0;
            }
        }
    </style>
</head>

<body>

    <div class="header">
        <h2>{{ config('app.name') }}</h2>
    </div>

    <div class="row">
        {{ $slot }}
        <div class="rightcolumn">
            <div class="card">
                <h2>About Me</h2>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            </div>
            <div class="card">
                <h3>Categories</h3>
                <ul style="list-style-type:disc;">
                    @forelse ($categories as $category)
                        <li><a href="{{ route('categories.show', ['category' => $category]) }}"> {{ $category->name }}
                            </a>
                        </li>
                    @empty
                </ul>
                <p>Blog hasn't any category</p>
                @endforelse
            </div>
            <div class="card">
                <h3>Follow Me</h3>
                <ul style="list-style-type:disc;">
                        <li><a href="https://www.linkedin.com/in/elgammal">Linkedin</a>
                        <li><a href="https://www.github.com/yasserelgammal">Github</a>
                        </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer">
        <h2>Footer</h2>
    </div>

</body>

</html>
