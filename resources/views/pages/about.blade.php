@extends('layouts.app')

@section('title')
    About
@endsection

@section('contents')
    <div id="about-us-main-container">
        <div class="sidebars-about-us">
                <div id="sidenav-t">
                    <a href="#aboutUs" class="menu-items-about current-item-about-us">About Us</a>
                    <a href="#ourTeam" class="menu-items-about">Our Team</a>
                    <a href="#education" class="menu-items-about">Education</a>
                    <a href="#contactUs" class="menu-items-about">Contact Us</a>
                    <a href="#lifeAt" class="menu-items-about">Life At OsteoEgypt</a>
                    <a href="#careers" class="menu-items-about">Careers</a>
                </div>
                <div id="sidenav-te">
                    <a href="#faq" class="menu-items-about">FAQ</a>
                    <a href="#terms" class="menu-items-about">Terms & Conditions</a>
                    <a href="#privacypolicy" class="menu-items-about">Privacy Policy</a>
                </div>
        </div>
        <div id="about-us-content">
            <h1 class="about-us-h1s">About Us</h1>
            <p class="about-us-ps">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            <h2 class="about-us-h2s">What is OsteoPathy</h2>
            <div class="what-is-container">
                <p class="about-us-ps about-us-what-para fl-1 mr-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad maiores accusantium deserunt incidunt qui cum, voluptas ducimus, odit quasi eaque quisquam id ex nostrum necessitatibus. Harum expedita quisquam eum fugit reprehenderit maiores similique? Natus molestias dolorem cum laboriosam aperiam assumenda odit non amet possimus nisi tempore provident voluptatum, iure rerum repellendus. Asperiores vel consequuntur recusandae voluptate rem quos sequi adipisci obcaecati facilis. Distinctio qui vel culpa iste doloremque? Modi magni temporibus corrupti fugit ad non id labore eos ipsa debitis. Et nisi vitae, atque expedita voluptatum autem cumque eos iusto saepe aperiam quia dicta corrupti non maxime, facilis esse reiciendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tempore vel quas ipsam a suscipit minima, similique ullam minus enim earum itaque in ipsa sapiente nobis vitae laboriosam voluptates, at doloribus voluptatum quia ex. Quaerat ullam, illum cum ut similique, nobis odio placeat illo aliquid, ducimus quisquam dignissimos corporis amet neque molestias alias reiciendis. Dicta quibusdam odit porro est et, molestias soluta. Perspiciatis sequi molestiae aperiam consequuntur assumenda voluptatum voluptates quis numquam eligendi qui fugit, veniam repudiandae porro voluptate quasi quaerat in, totam, possimus similique! Voluptatum temporibus soluta vitae, doloremque deserunt minus vel ipsam sunt laboriosam voluptas debitis accusantium incidunt officiis ut, a autem suscipit ab obcaecati numquam natus modi eaque? Voluptatem quaerat placeat a incidunt! Architecto, nulla. Voluptates officia voluptatem iure, explicabo rem iusto sit quo autem accusantium commodi perferendis molestiae sunt enim. Minima itaque distinctio ullam adipisci voluptatibus et est deserunt. Eaque error dignissimos minus nulla totam quis quod commodi temporibus minima adipisci, omnis eos atque aut dolore quidem praesentium ad accusamus quibusdam nam ducimus. Explicabo distinctio architecto tenetur. Rerum autem nulla quia veniam cum sit modi corrupti ullam quibusdam aperiam doloremque exercitationem voluptatem totam laborum repellendus, quisquam doloribus incidunt molestiae! Vel placeat, expedita minima quibusdam qui necessitatibus neque iure deleniti quod assumenda. Magni enim illum voluptates delectus distinctio, quas iste facere eveniet cupiditate officia nesciunt id omnis qui, blanditiis modi itaque recusandae accusantium mollitia minus amet corporis fugiat. Inventore suscipit numquam doloremque, ab voluptatem dolore cumque magni voluptates alias aperiam quas excepturi optio quae earum dolorem necessitatibus ducimus eum. </p>
                <a  href="{{ asset('assets/png/aboutus1.png') }}" class="about-us-single-img fl-1">
                    <img src="{{ asset('assets/png/aboutus1.png') }}" alt="OsteoPathy" class="about-us-single-img">
                </a>
            </div>
            <h2 class="about-us-h2s">Our Vision</h2>
            <p class="about-us-ps">1. Promote and encourage those pursuing medical careers to become certified in osteopathic medicine. This includes providing available educational institutions to support this movement.<br>
            2. Promote and encourage current DO’s to practice osteopathy in its true form. In many areas, such as the U.S., only 3-5% of DO’s actually practice osteopathic manual skills on a regular basis.<br>
            3. Promote and encourage Physical therapist to join in with supporting and promoting awareness of osteopathy by either continuing their education to become DO’s, or working together and “complimenting” DO’s by adopting the osteopathic philosophy within the scope of PT practice.<br>
            </p>
            <h2 class="about-us-h2s">Our Mission</h2>
            <p class="about-us-ps">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

            <h2 class="about-us-h2s">Accreditation's</h2>
            <p class="about-us-ps">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

            <h2 class="about-us-h2s">Our Gallery</h2>
            <div class="gallery-about-us">
                <a  href="{{ asset('assets/png/aboutus2.png') }}">
                    <img src="{{ asset('assets/png/aboutus2.png') }}" alt="OsteoPathy">
                </a>
            </div>
            <div class="gallery-about-us">
                <a  href="{{ asset('assets/png/aboutus3.png') }}">
                    <img src="{{ asset('assets/png/aboutus3.png') }}" alt="OsteoPathy">
                </a>
            </div>
            <div class="gallery-about-us">
                <a  href="{{ asset('assets/png/aboutus4.png') }}">
                    <img src="{{ asset('assets/png/aboutus4.png') }}" alt="OsteoPathy">
                </a>
            </div>
            <div class="gallery-about-us">
                <a  href="{{ asset('assets/png/aboutus5.png') }}">
                    <img src="{{ asset('assets/png/aboutus5.png') }}" alt="OsteoPathy">
                </a>
            </div>
            <div class="gallery-about-us">
                <a  href="{{ asset('assets/png/aboutus6.png') }}">
                    <img src="{{ asset('assets/png/aboutus6.png') }}" alt="OsteoPathy">
                </a>
            </div>
            <div class="gallery-about-us">
                <a  href="{{ asset('assets/png/aboutus7.png') }}">
                    <img src="{{ asset('assets/png/aboutus7.png') }}" alt="OsteoPathy">
                </a>
            </div>
        </div>

    </div>
@endsection()