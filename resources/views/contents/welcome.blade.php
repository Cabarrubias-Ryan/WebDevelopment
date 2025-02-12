@extends('layouts.app')

@section('title','Home')

@section('content')
<section class="container">
     <div class="hero-pic">
        <img src="{{ asset('storage/images/profile/profile1.png')}}" alt="profile pic">
     </div>
     <div class="hero-text">
        <h5>Hi I'm <span class="input">Backend Developer</span></h5>
        <h1>Ryan Cabarrubias</h1>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta delectus dolorum
            quibusdam maiores magni quod rem in porro, laborum, laudantium ex repellendus explicabo,
            autem molestiae!
        </p>

        <div class="btn-group">
           <a href="#" class="btn active">Download CV</a>
           <a href="#" class="btn">Contact</a>
        </div>

        <div class="social">
            <a href="https://www.facebook.com/cabarrubias.r" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/ryan-cabarrubias-956952253/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.instagram.com/kriane_/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://github.com/Cabarrubias-Ryan" target="_blank"><i class="fa-brands fa-github"></i></a>
        </div>
     </div>
</section>
<section id="about" class="about-container">
    <h1>About Me</h1>
    <div class="about-content">
        <div class="about-message">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo maiores qui consequuntur facere quod laborum tempore odio neque voluptates cumque, tenetur nesciunt repellat asperiores eius, eum quibusdam enim, saepe delectus.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt odit quaerat natus placeat accusantium hic cumque iusto exercitationem aperiam, ducimus non! Laudantium quia error odit, harum ipsa neque rem ipsam?
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis obcaecati facilis commodi. Debitis et magni, ipsum vitae labore, nostrum earum quod obcaecati voluptas deserunt possimus ducimus tempore iste mollitia soluta?</p>
            <div class="inner-box">
                <span>Hobbies</span>
                <ul>
                    <li>1. Watching Movies</li>
                    <li>2. Cleaning House</li>
                    <li>3. Cooking</li>
                </ul>
            </div>
        </div>
        <div class="picture-box">
            <img src="{{ asset('storage/images/profile/profile2.jpg')}}" alt="">
        </div>
    </div>
</section>
<section id="services" class="services-container">
    <h1>Services</h1>
    <div class="services-content">
        <div class="services-box">
            <div class="services-icon">
                <i class="fa-solid fa-laptop"></i>
            </div>
            <h3>Web Development</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, in maiores! Minima aliquam iusto maiores, a fugit voluptas adipisci. A, in? Consectetur rerum repellat tempora error atque recusandae saepe? Cum!.</p>
            <div class="btn-group">
                <button>Read More</button>
            </div>
        </div>
        <div class="services-box">
            <div class="services-icon">
                <i class="fa-solid fa-mobile"></i>
            </div>
            <h3>Mobile Development</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto corrupti sed porro nulla totam, similique aliquid aliquam ipsam cum dignissimos exercitationem quis nesciunt officia quos harum excepturi aperiam.</p>
            <div class="btn-group">
                <button>Read More</button>
            </div>
        </div>
        <div class="services-box">
            <div class="services-icon">
                <i class="fa-solid fa-code"></i>
            </div>
            <h3>UX Design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam enim reiciendis suscipit inventore ipsam autem! Repellendus quos culpa doloribus corrupti, numquam hic quis quidem cum, ab molestiae consequatur adipisci iste.</p>
            <div class="btn-group">
                <button>Read More</button>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact-container">
    <h2>SEND ME A MESSAGE</h2>
    <div class="contact-content">
        <div class="contact-box">
            <form >
                <div class="input-group">
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="input-group">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
                </div>
                <div class="input-group btn">
                    <button>Submit</button>
                </div>
            </form>
        </div>
        <div class="contact-message">
            <h6>Getting in touch easy!</h6>
            <p><i class="fa-solid fa-location-dot"></i>Rizal, Sogod, Southern Leyte</p>
            <p><i class="fa-solid fa-phone"></i>+639952789048</p>
            <p><i class="fa-solid fa-envelope"></i>cabarrubias1002@gmail.com</p>
            <div class="contact-social">
                <a href="https://www.facebook.com/cabarrubias.r" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/ryan-cabarrubias-956952253/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.instagram.com/kriane_/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://github.com/Cabarrubias-Ryan" target="_blank"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection
