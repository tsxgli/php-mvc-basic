<?php
class User{
	private int $id;
    private string $firstName;
    private string $lastName;
    private string $postCode;
    private string $address; 
    private string $birthdate;
    private string $email;
    private int $password;
    private bool $isAdmin;


    

	/**
	 * @return string
	 */
	public function getFirstName(): string {
		return $this->firstName;
	}
	
	/**
	 * @param string $firstName 
	 * @return self
	 */
	public function setFirstName(string $firstName): self {
		$this->firstName = $firstName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLastName(): string {
		return $this->lastName;
	}
	
	/**
	 * @param string $lastName 
	 * @return self
	 */
	public function setLastName(string $lastName): self {
		$this->lastName = $lastName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPostCode(): string {
		return $this->postCode;
	}
	
	/**
	 * @param string $postCode 
	 * @return self
	 */
	public function setPostCode(string $postCode): self {
		$this->postCode = $postCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAddress(): string {
		return $this->address;
	}
	
	/**
	 * @param string $address 
	 * @return self
	 */
	public function setAddress(string $address): self {
		$this->address = $address;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getBirthdate(): string {
		return $this->birthdate;
	}
	
	/**
	 * @param int $age 
	 * @return self
	 */
	public function setBirthdate(string $birthdate): self {
		$this->birthdate = $birthdate;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string {
		return $this->email;
	}
	
	/**
	 * @param string $email 
	 * @return self
	 */
	public function setEmail(string $email): self {
		$this->email = $email;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPassword(): int {
		return $this->password;
	}
	
	/**
	 * @param int $password 
	 * @return self
	 */
	public function setPassword(int $password): self {
		$this->password = $password;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function getIsAdmin(): bool {
		return $this->isAdmin;
	}
	
	/**
	 * @param bool $isAdmin 
	 * @return self
	 */
	public function setIsAdmin(bool $isAdmin): self {
		$this->isAdmin = $isAdmin;
		return $this;
	}
}

?>