<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Construct</title>
    <script src="public/js/tailwind-3.2.1.js"></script>
</head>
<body class="bg-gradient-to-t
             from-blue-900
             to-green-100
             min-h-screen">
    <main class="m-10 
                 mx-auto
                 max-w-lg
                 p-5 
                 border-2
               border-blue-900
               bg-white/5
                 rounded ">
        <h1 class="m-5 
                   text-center 
                   text-4xl 
                   text-black 
                   text-opacity-50 
                   font-medium">
            <a href="index.php" class="float-left
                                       transition
                                       hover:text-white
                                       hover:-translate-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            Method Construct
        </h1>
        <section class="bg-black
                         text-white
                         text-opacity-75
                         p-5   
                         min-h-[400px]
                         rounded">
            <?php
            
                class Playlist {
                    //Attributes
                    private $name;
                    private $artist  = Array();
                    private $album  = Array();
                    private $image   = Array();
                    private $year = Array();

                    //Methods
                    public function __construct($name) {
                        $this->name = $name;
                    }
                    public function setPlayList($artist, $album, $image, $year) {
                        $this->artist[] = $artist;
                        $this->album[] = $album;
                        $this->image[] = $image;
                        $this->year[] = $year;
                    }
                    public function getPlayList() {
                        for ($i = 0 ; $i < count($this->artist) ; $i++) {
                            echo '<ul class="mb-4 flex flex-col justify-center rounded ring-1 ring-white/25 p-4">';
                            echo '<li> <strong> Artist: </strong> '.$this->artist[$i].'</li>';
                            echo '<li> <strong> Album: </strong> '.$this->album[$i].'</li>';
                            echo '<li> <strong> Image: </strong> <img src="'.$this->image[$i].'"widht="80px"></li>';
                            echo '<li> <strong> Year: </strong> '.$this->year[$i].'</li>';
                            echo '</ul>';
                        }
                    }
                }
                $pl = new PlayList('nosequenombre');
                $pl->setPlayList('Nirvana', 'Nevermine', 'https://tinyurl.com/2p8p3n7m', 1991);
                $pl->setPlayList('Metallica', 'Master of Puppets', 'https://tinyurl.com/2b32mtkz', 1986);
                $pl->setPlayList('Green Day', 'Dookie', 'https://tinyurl.com/5ezwxsud', 1994);
                $pl->getPlayList();
            ?>
        </section>
    </main>
    
</body>

</html>