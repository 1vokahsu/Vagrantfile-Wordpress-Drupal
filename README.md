<a name="readme-top"></a>

<h3 align="center">Vagrantfile-Wordpress-Drupal</h3>
  <p align="center">
    Automating VM creation with a single command
    <br />
    <a href="https://github.com/1vokahsu/Vagrantfile-Wordpress-Drupal/issues">Report Bug</a>
    ·
    <a href="https://github.com/1vokahsu/Vagrantfile-Wordpress-Drupal/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project
`Vagrant` is a tool for managing virtual environments. The core of `Vagrant` is boxes. A box is a file with a fully configured and ready-to-use virtual environment.Boxes are conveniently shared with colleagues to ensure an identical development environment for the whole team.

All the VM settings (how much memory to allocate, which directories to share with your host system, etc.) are contained in a single file called `Vagrantfile`. You can also use this file to specify which commands should be executed the first time you run `Vagrant`.

Specifically in this `Vagrantfile` I have prescribed all the settings and adjustments for running Drupal and Wordpress, which will be done using the `vagrant up` command

<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

I was working on a macbook m1. I downloaded and installed `vagrant` following the instructions from [Habr](https://habr.com/ru/company/bar/blog/708950/).


### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/1vokahsu/Vagrantfile-Wordpress-Drupal.git
   ```
2. Open the terminal, go to the cloned repository and and execute the command `vagrant up`
   ```sh
   cd Vagrantfile-Wordpress-Drupal
   vagrant up
   ```
3. Open the browser and enter in the search bar `hhtp:\\your_ip:81` (open Wordpress) and `hhtp:\\your_ip:82` (Drupal) or use `http:\\localhost:81`, `http:\\localhost:82`
4.  You also can change to different unique phrases. You can generate these using the [WordPress.org](https://api.wordpress.org/secret-key/1.1/salt/) secret-key service
5. Open the `wp-config.php` file and change the values
   ```php
    define('AUTH_KEY',         ',h>Af,nVv4$<tPl~AY]L~?1h,[z)93MP<!4xmY55i4Atd/ic_*<AXx|,obaS7]ix');
    define('SECURE_AUTH_KEY',  'R*_|b/#djD%&Fcb^*SM)mg?fO]5n}p !n4D|;U5|Q%=%eVCMqgCS?P#D}pqZM8SO');
    define('LOGGED_IN_KEY',    '*bwIJspZHpeRz_KNMR(%AT0+Qx0]9ewsz&j6E-l/eHkwP*ve;N& +3JS~QTxET`>');
    define('NONCE_KEY',        '<}l3#,OMB`6a{S93=)TuB>m(dUGYR-.lzvf?2+}|pzyMx-eC;sH,?F)61e>K*d^U');
    define('AUTH_SALT',        'i~$K{qy+BO0F.rJ0)]}4(2;b^0(/lRN1gO9@+j|gNA+FY01R+kDgu>^X~Z{].a];');
    define('SECURE_AUTH_SALT', 'RKud|}`EGt(e|#o4YpBgxj.#(7XYWYO5nC<o0r;8PU6AN5Iyja2xZ.DW*nq^+&P-');
    define('LOGGED_IN_SALT',   '-,*rwBgHZU+#l#W4->k2F0{c6wyGxs(=*chw(n_-u_+cT?`8~98UJxuE#N9WgIp&');
    define('NONCE_SALT',       '$l ptb*bz ZOL`S^XWCCUgbH%S2[!2|V-0=~v&b~j{<Vl7MF%Eu/tjU)1)RS- }W');
   ```


<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


<!-- CONTACT -->
## Contact

Sasha - [@svokahsu](https://web.telegram.org/svokahsu) - alexandrushakov0408@gmail.com

Project Link: [https://github.com/1vokahsu/Vagrantfile-Wordpress-Drupal](https://github.com/1vokahsu/Vagrantfile-Wordpress-Drupal)

<p align="right">(<a href="#readme-top">back to top</a>)</p>