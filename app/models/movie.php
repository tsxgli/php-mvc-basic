<?php
class Movie{
    private int $id;
    private string $title;
    private string $director;
    private string $description;
    private string $genre;
    private string $dateProduced;


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
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}
	
	/**
	 * @param int $id 
	 * @return self
	 */
	public function setId(int $id): self {
		$this->id = $id;
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
}
?>