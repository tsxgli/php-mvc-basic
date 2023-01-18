<?php
class Order
{

    private int $id;
    private int $userID;
    private int $movieID;
    private DateTime $dateOrdered;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id 
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

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
    public function getDateOrdered(): DateTime
    {
        return $this->dateOrdered;
    }

    /**
     * @param DateTime $dateOrdered 
     * @return self
     */
    public function setDateOrdered(DateTime $dateOrdered): self
    {
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
}
?>