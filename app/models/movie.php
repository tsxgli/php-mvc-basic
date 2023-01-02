<?php
class Movie{
    private int $_id;
    private string $title;
    private string $director;
    private string $description;
    private string $genre;
    private string $dateProduced;
	private string $price;
	private string $image;
	private int $stock;



    public function __construct(){

    }

	/**
	 * @return string
	 */
	public function getGenre(): string {
		return $this->genre;
	}
	
	/**
	 * @param string $genre 
	 * @return self
	 */
	public function setGenre(string $genre): self {
		$this->genre = $genre;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDirector(): string {
		return $this->director;
	}
	
	/**
	 * @param string $director 
	 * @return self
	 */
	public function setDirector(string $director): self {
		$this->director = $director;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getDateProduced(): string {
		return $this->dateProduced;
	}
	
	/**
	 * @param string $dateProduced 
	 * @return self
	 */
	public function setDateProduced(string $dateProduced): self {
		$this->dateProduced = $dateProduced;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPrice(): string {
		return $this->price;
	}
	
	/**
	 * @param string $price 
	 * @return self
	 */
	public function setPrice(string $price): self {
		$this->price = $price;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string {
		return $this->title;
	}
	
	/**
	 * @param string $title 
	 * @return self
	 */
	public function setTitle(string $title): self {
		$this->title = $title;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getImage(): string {
		return $this->image;
	}
	
	/**
	 * @param string $imageName 
	 * @return self
	 */
	public function setImage(string $image): self {
		$this->image = $image;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription(): string {
		return $this->description;
	}
	
	/**
	 * @param string $description 
	 * @return self
	 */
	public function setDescription(string $description): self {
		$this->description = $description;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getStock(): int {
		return $this->stock;
	}
	
	/**
	 * @param int $stock 
	 * @return self
	 */
	public function setStock(int $stock): self {
		$this->stock = $stock;
		return $this;
	}

	/**
	 * @return int
	 */
	public function get_id(): int {
		return $this->_id;
	}
	
	/**
	 * @param int $_id 
	 * @return self
	 */
	public function set_id(int $_id): self {
		$this->_id = $_id;
		return $this;
	}
}
?>