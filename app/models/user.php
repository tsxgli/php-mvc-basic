<?php
class User{
	private int $_id;
    private string $firstname;
    private string $lastname;
    private string $postcode;
    private string $address; 
    private string $birthdate;
    private string $email;
    private string $password;
    private bool $isAdmin;


    

	/**
	 * @return string
	 */

	/**
	 * @return string
	 */
	

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
	 * @return string
	 */
	public function getBirthdate(): string {
		return $this->birthdate;
	}
	
	/**
	 * @param string $age 
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
	 * @return string
	 */
	public function getPassword(): string {
		return $this->password;
	}
	
	/**
	 * @param string $password 
	 * @return self
	 */
	public function setPassword(string $password): self {
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
	public function getFirstname(): string {
		return $this->firstname;
	}
	
	/**
	 * @param string $firstname 
	 * @return self
	 */
	public function setFirstname(string $firstname): self {
		$this->firstname = $firstname;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLastname(): string {
		return $this->lastname;
	}
	
	/**
	 * @param string $lastname 
	 * @return self
	 */
	public function setLastname(string $lastname): self {
		$this->lastname = $lastname;
		return $this;
	}
}

?>