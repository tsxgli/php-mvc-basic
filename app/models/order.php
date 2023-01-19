<?php
class Order
{
    private int $_id;
    private int $userID;
    private int $movieID;
    private string $dateOrdered;


    /**
     * @return int
     */
    public function getMovieID(): int
    {
        return $this->movieID;
    }

    /**
     * @param int $movieID 
     * @return self
     */
    public function setMovieID(int $movieID): self
    {
        $this->movieID = $movieID;
        return $this;
    }

    /**
     * @return DateTime
     */



	/**
	 * @return string
	 */
	public function getDateOrdered(): string {
		return $this->dateOrdered;
	}
	
	/**
	 * @param string $dateOrdered 
	 * @return self
	 */
	public function setDateOrdered(string $dateOrdered): self {
		$this->dateOrdered = $dateOrdered;
		return $this;
	}

	

	/**
	 * @return int
	 */
	public function getUserID(): int {
		return $this->userID;
	}
	
	/**
	 * @param int $userID 
	 * @return self
	 */
	public function setUserID(int $userID): self {
		$this->userID = $userID;
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