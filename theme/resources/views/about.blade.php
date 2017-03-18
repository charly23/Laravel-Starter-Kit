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

                        @include('pages.about', ['slug' => 'about'])

                        @include('template.form', ['slug' => 'form'])

                        @include('template.footer', ['slug' => 'footer'])

                        @include('template.site', ['slug' => 'site'])

                    </div>

                </div>

            </div>
        </div>  

    </body>

</html>