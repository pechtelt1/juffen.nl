<!-- component -->
<head>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
</head>


<div class="bg-grey col-12 mt-3 align-middle justify-content-center flex" >
    <button type="button" class="btn btn-light mr-10 shadow-sm" data-toggle="collapse" data-target="#filters">Filters <i class="fa fa-filter"></i></button>
    <input type="text" class="col-8 border-2 p-2" placeholder="Search for Startups..." id="search-filter">
</div>

<div id="filters" class="collapse">
    <hr class="solid col-9 mx-auto">

    <div class="d-md-flex d-lg-flex d-xl-flex justify-content-around col-9 mx-auto">

        <div class="col-lg-4 col-xl-3 col-md-6">
            <article class="filter-group">
                <header class="card-header">
                    <h6 class="title">Domain </h6>
                </header>
                <div class="filter-content" id="collapse_aside1" style="">
                    <div class="card-body"> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label"> E-commerce </div>
                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label"> Education </div>
                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label"> Aggriculture</div>
                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label"> Service</div>
                        </label> </div>
                </div>
            </article>
            <article class="filter-group">
                <header class="card-header">
                    <h6 class="title"> Team Size </h6>
                </header>
                <div class="filter-content" id="collapse_aside3" style="">
                    <div class="card-body">
                        <label class="checkbox-btn"> <input type="checkbox" name="team" onclick="onlyOne(this)"> <span class="btn btn-light"> 1 - 10 </span> </label>
                        <label class="checkbox-btn"> <input type="checkbox" name="team" onclick="onlyOne(this)"> <span class="btn btn-light"> 10 - 25 </span> </label>
                        <label class="checkbox-btn"> <input type="checkbox" name="team" onclick="onlyOne(this)"> <span class="btn btn-light"> 25 - 50 </span> </label>
                        <label class="checkbox-btn"> <input type="checkbox" name="team" onclick="onlyOne(this)"> <span class="btn btn-light"> 50 - 100 </span> </label>
                        <label class="checkbox-btn"> <input type="checkbox" name="team" onclick="onlyOne(this)"> <span class="btn btn-light"> greater than 100 </span> </label>
                    </div>
                </div>
            </article>

        </div>

        <div class ="col-lg-4 col-xl-3 col-md-6">

            <article class="filter-group">
                <header class="card-header">
                    <h6 class="title">Assistance Required </h6>
                </header>
                <div class="filter-content" id="collapse_aside1" style="">
                    <div class="card-body"> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label"> Under 50,000 &#8377; </div>
                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label"> 50,000 - 1 L &#8377; </div>
                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label"> 1 L - 5 L &#8377;</div>
                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label"> More than 5 L &#8377;</div>
                        </label> </div>
                </div>

            </article>
            <article class="filter-group">
                <header class="card-header">
                    <h6 class="title"> Year </h6>
                </header>
                <div class="filter-content" id="collapse_aside1" style=" height: fit-content;">
                    <input class="date-own form-control mb-10 overscroll-auto" style="" type="text">


                    <script type="text/javascript">
                        $('.date-own').datepicker({
                            minViewMode: 2,
                            format: 'yyyy'
                        });
                    </script>
                </div>
            </article>


        </div>
        <div class ="col-lg-4 col-xl-3 col-md-6">
            <article class="filter-group">
                <header class="card-header">
                    <h6 class="title">Stage </h6>
                </header>
                <div class="filter-content" id="collapse_aside4" style="">
                    <div class="card-body"> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label"> Completed </div>
                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label"> Processing </div>
                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label"> Pending</div>
                        </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                            <div class="custom-control-label"> Something else</div>
                        </label> </div>
                </div>
            </article>

            <a href="#" class="btn btn-medium button mt-6 mb-12 md:mb-0 md:mt-10 inline-block  text-white bg-red-500 hover:bg-red-600 rounded-lg shadow mx-auto" data-abc="true" data-toggle="collapse" data-target="#filters">Apply Now</a>

        </div>

    </div>


</div>
</div>
</div>
</div>
</div>


</div>
</div>
