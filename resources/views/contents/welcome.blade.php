@extends('layouts.app')

@section('title','Home')

@section('content')
<section class="container">
     <div class="hero-pic">
        <img src="{{ asset('storage/images/profile/profile1.png')}}" alt="profile pic">
     </div>
     <div class="hero-text">
        <h5>Hi I'm <span class="input">Student</span></h5>
        <h1>Ryan Cabarrubias</h1>
        <p>I am a passionate web developer and tech enthusiast. With a keen eye for detail and a love for creating seamless user experiences, I specialize in developing dynamic websites and mobile applications. I enjoy taking on challenges, solving problems, and bringing ideas to life through code. I'm always looking to grow my skills and contribute to meaningful projects that make a positive impact.</p>

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
            <p>I enjoy taking on challenging projects that push my skills to the next level. Whether it's building a robust backend system, crafting a seamless frontend, or developing a mobile application, I strive for excellence in every line of code I write. My approach is centered on collaboration and understanding the unique needs of each project to deliver solutions that are not only functional but also beautiful and intuitive.</p>

            <div class="inner-box">
                <span>Technologies i use</span>
                <ul class="tech-list">
                    <li><i class="fa-brands fa-html5 fa-2xl" style="color: #e34f26;"></i></li>
                    <li><i class="fa-brands fa-css3-alt fa-2xl" style="color: #2965f1;"></i></li>
                    <li><i class="fa-brands fa-js fa-2xl" style="color: #f7df1e;"></i></li>
                    <li><i class="fa-brands fa-react fa-2xl" style="color: #61dafb;"></i></li>
                    <li><i class="fa-brands fa-laravel fa-2xl" style="color: #ff0040;"></i></li>
                    <li><i class="fa-brands fa-bootstrap fa-2xl" style="color: #0d6efd;"></i></li>
                    <li><i class="fa-brands fa-php fa-2xl" style="color: #8c1f1f;"></i></li>
                    <li><i class="fa-brands fa-python fa-2xl" style="color: #306998;"></i></li>
                    <li><i class="fa-brands fa-cuttlefish fa-2xl" style="color: #f7a800;"></i></li>
                    <li><i class="fa-brands fa-java fa-2xl" style="color: #f8981d;"></i></li>
                    <li><i class="fa-solid fa-database fa-2xl" style="color: #00758f;"></i></li>
                    <li><i class="fa-brands fa-github fa-2xl"></i></li>
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
            <p>I specialize in building responsive and high-performance websites tailored to your business needs. From user-friendly designs to robust backend systems, our team ensures a seamless web experience for your customers.</p>
            <div class="btn-group">
                <button>Read More</button>
            </div>
        </div>
        <div class="services-box">
            <div class="services-icon">
                <i class="fa-solid fa-mobile"></i>
            </div>
            <h3>Mobile Development</h3>
            <p>I develop high-performance mobile applications for both Android and iOS platforms. Whether you need a native app or a cross-platform solution, I work to create an engaging user experience that works seamlessly on all devices.</p>
            <div class="btn-group">
                <button>Read More</button>
            </div>
        </div>
        <div class="services-box">
            <div class="services-icon">
                <i class="fa-solid fa-code"></i>
            </div>
            <h3>UX Design</h3>
            <p>I focus on designing intuitive and user-centered digital experiences that enhance how users interact with your website or app. My goal is to make your product both visually appealing and easy to navigate, ensuring a great user experience.</p>
            <div class="btn-group">
                <button>Read More</button>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact-container">
    <h2>Contact</h2>
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
