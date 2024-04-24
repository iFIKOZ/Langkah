<x-app-layout>
    <x-slot name="title">
        Forum
    </x-slot>

    <div class="index layout">
    <link rel="icon" href="library/images/logo/logo.png">
    <link rel="stylesheet" type="text/css" href="library/css/layout.css">
    <link rel="stylesheet" type="text/css" href="library/css/style.css">
    <link rel="stylesheet" type="text/css" href="library/css/loader.css">
    <link rel="stylesheet" type="text/css" href="library/css/step.css">
    <link rel="stylesheet" type="text/css" href="library/css/phone.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
        <div class="judulhal">
            <h3>Forum</h3>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('ask') }}">
                <button type="button" class="btn btn-primary shadow-none">ASK</button>
            </a>

            <div class="d-flex align-items-center">
                <button type="button" class="btn btn-secondary shadow-none" style="margin-right: 1rem;margin-left: 1rem;">Sort</button>
                <ul class="nav col-12 col-lg-auto ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <form class="col-10 col-lg-auto mb-3 mb-lg-0 me-lg-3 col-sm-auto" role="search">
                            <input type="search" class="form-control forumsearch" placeholder="Search Topic..." aria-label="Search">
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <div class="isihal">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subjects</th>
                        <th scope="col">Author</th>
                        <th scope="col">Replies</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Best glue for DIY</td>
                        <td>Otto</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Recommend 3D print vendor</td>
                        <td>Arfiko</td>
                        <td>21</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Recommend Laser cut vendor</td>
                        <td>Larry</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Alternate of paper glue</td>
                        <td>Mark</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Best soldering iron</td>
                        <td>Sarah</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Tips for soldering</td>
                        <td>Sophia</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>alternative if you don't have soldering iron</td>
                        <td>Lee</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>How to clean glue residue</td>
                        <td>Ethan</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Tips for precise cutting paper</td>
                        <td>Taylor</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Can I glue underwater</td>
                        <td>William</td>
                        <td>2</td>
                    </tr>


                </tbody>
            </table>



        </div>

        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>

</x-app-layout>

