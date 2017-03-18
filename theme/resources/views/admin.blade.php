<!DOCTYPE html> 
<html>

    <head>
        @include('template.head')
    </head>

    <body>

        <div class="outer-wrapper">
            <div class="outer-pad">

                <div class="main-content">

                    <div class="mid-wrapper">

                        @include('template.header', ['slug' => 'header'])

                        @include('admin.login', ['slug' => 'login'])

                        @include('template.footer', ['slug' => 'footer'])

                        @include('template.site', ['slug' => 'site'])

                    </div>

                </div>

            </div>
        </div>  

    </body>

</html>