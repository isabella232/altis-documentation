<?php
/**
 * Altis Documentation Set. A set is a collection of Groups.
 *
 * @package altis/documentation
 */

namespace Altis\Documentation;

/**
 * Altis Documentation Set Object.
 * Typically, a related set of documentation groups.
 *
 * @package altis/documentation
 */
class Set {
	/**
	 * Set title . E.g. 'Developer documentation', 'User documentation', etc.
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * Groups which belong to the set.
	 *
	 * @var Group[]
	 */
	protected $groups = [];

	/**
	 * Constructor.
	 *
	 * @param string $title Set title.
	 */
	public function __construct( string $title = '' ) {
		$this->title = $title;
	}

	/**
	 * Get the Set title.
	 *
	 * @return string
	 */
	public function get_title() : string {
		return $this->title;
	}

	/**
	 * Add Group to the documentation set.
	 *
	 * @param string $id    Group Id
	 * @param Group  $group Group object.
	 */
	public function add_group( string $id, Group $group ) : void {
		$this->groups[ $id ] = $group;
	}

	/**
	 * Get all groups which belong to the set.
	 *
	 * @return Group[]
	 */
	public function get_groups() : array {

		return $this->groups;
	}

	/**
	 * Get a single group by ID.
	 *
	 * @param string $id The group id.
	 *
	 * @return Group|null Group if set, null otherwise.
	 */
	public function get_group( string $id ) : ?Group {

		return $this->groups[ $id ] ?? null;
	}

}
