<?php

class Movie
{

    public $title;
    public $banner;
    public $releaseDate;


    /**
     * CONSTRUCTOR
     */
    function __construct($_title, $_banner, $_releaseDate)
    {
        $this->title = $_title;
        $this->banner = $_banner;
        $this->releaseDate = $_releaseDate;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of banner
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set the value of banner
     *
     * @return  self
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get the value of release_date
     */
    public function getRelease_date()
    {
        return $this->releaseDate;
    }

    /**
     * Set the value of release_date
     *
     * @return  self
     */
    public function setRelease_date($release_date)
    {
        $this->release_date = $release_date;

        return $this;
    }

    /**
     * Print movie card  
     */

    public function printMovieCard()
    {
        $title = $this->getTitle();
        $banner = $this->getBanner();
        $release = $this->getRelease_date();

?>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $banner ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $title ?></h5>
                <p class="card-text">Release Date :  <?php echo $release ?></p>
            </div>
        </div>




<?php


    }
}


?>