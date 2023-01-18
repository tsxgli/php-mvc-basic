<?php
class Movie implements JsonSerializable{
    private int $_id;
    private string $title;
    private string $director;
    private string $description;
    private string $genre;
    private string $dateProduced;
	private string $price;
	private string $image;
	private int $stock;
	private string $rating;


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

	/**
	 * @return string
	 */
	public function getRating(): string {
		return $this->rating;
	}
	
	/**
	 * @param string $rating 
	 * @return self
	 */
	public function setRating(string $rating): self {
		$this->rating = $rating;
		return $this;
	}
	/**
	 * Specify data which should be serialized to JSON
	 * Serializes the object to a value that can be serialized natively by json_encode().
	 * @return mixed Returns data which can be serialized by json_encode(), which is a value of any type other than a resource .
	 */
	public function jsonSerialize():mixed{
        return get_object_vars($this);
    }
}
?>