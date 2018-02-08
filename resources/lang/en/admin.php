<?php

return [
    'title' => 'Control Panel',
    'test' => 'Test',
    'navbar' => [
        'toggle_navigation' => 'Toggle navigation',
        'dashboard' => 'Dashboard',
        'search' => 'Search',
        'login' => 'Login',
        'logout' => 'Logout',
        'account' => 'Account',
        'view_profile' => 'View Profile',
        'edit_profile' => 'Edit Profile',
        'change_password' => 'Change password',
    ],
    'sidebar_menu' => [
        'home' => 'Home',
        'dashboard' => 'Dashboard',
        'rank' => 'Ranking',
        'bet' => 'Bet',
        'user' => 'User',
        'category' => 'Category',
        'post' => 'Post',
        'comment' => 'Comment',
        'country' => 'Country',
        'league' => 'League',
        'team' => 'Team',
        'team_achievement' => 'Team Achievement',
        'player' => 'Player',
        'player_award' => 'Player Award',
        'match' => 'Match',
        'match_event' => 'Match Event',
        'position' => 'Position',
    ],
    'footer_menu' => [
        'home' => 'Home',
    ],
    '404' => '404 Not Found',
    '403' => '403 Forbidden',
    'oops' => 'Oops',
    'dashboard' => [
        'users' => 'Users!',
        'teams' => 'Teams!',
        'matches' => 'Matches!',
        'bets' => 'Bets!',
        'view_details' => 'View Details',
    ],
    'auth' => [
        'register' => 'Register',
        'login' => 'Login',
        'reset_password' => 'Reset Password',
        'email' => 'Email address',
        'send_reset_link' => 'Send Reset Link',
        'password' => 'Password',
        'password_confirmation' => 'Password Confirmation',
        'forgot_password' => 'Forgot Password',
        'remember' => 'Remember',
        'name' => 'Name',
    ],
    'country' => [
        'index' => [
            'title' => 'Countries',
            'add' => [
                'title' => 'Add new country',
                'name' => 'Country',
                'name_placeholder' => 'Country',
                'submit_button' => 'Add',
                'message' => [
                    'add_success' => 'Add country successfully',
                    'add_error' => 'Add country fail',
                ],
            ],
            'edit' => [
                'title' => 'Edit the country',
                'name' => 'Country',
                'name_placeholder' => 'Country',
                'submit_button' => 'Edit',
                'message' => [
                    'edit_success' => 'Edit the country successfully',
                    'not_found' => 'The country not found',
                ],
            ],
            'delete' => [
                'message' => [
                    'delete_success' => 'Remove country successfully',
                    'not_found' => 'The country not found',
                    'delete_error' => 'Remove country fail',
                    'delete_error1451' => 'Information is being used, can not be deleted',
                ],
            ],
            'table' => [
                'title' => 'Countries',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'name' => 'Name',
                'no_results' => 'No results',
                'edit_button_title' => 'Edit Country',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this country?',
                ],
            ],
        ],
    ],
    'league' => [
        'index' => [
            'title' => 'Leagues',
            'add' => [
                'title' => 'Add new league',
                'name' => 'Name',
                'name_placeholder' => 'League',
                'year' => 'Year',
                'year_placeholder' => '1996',
                'description' => 'description',
                'description_placeholder' => '',
                'submit_button' => 'Add',
                'message' => [
                    'add_success' => 'Add league successfully',
                    'add_error' => 'Add league fail',
                ],
            ],
            'edit' => [
                'title' => 'Edit the league',
                'name' => 'Name',
                'name_placeholder' => 'League',
                'year' => 'Year',
                'year_placeholder' => '1996',
                'description' => 'description',
                'description_placeholder' => '',
                'submit_button' => 'Edit',
                'message' => [
                    'edit_success' => 'Edit the league successfully',
                    'not_found' => 'The league not found',
                ],
            ],
            'delete' => [
                'message' => [
                    'delete_success' => 'Remove league successfully',
                    'not_found' => 'The league not found',
                    'delete_error' => 'Remove league fail',
                    'delete_error1451' => 'Information is being used, can not be deleted',
                ],
            ],
            'table' => [
                'title' => 'Leagues',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'name' => 'Name',
                'description' => 'Description',
                'year' => 'Year',
                'no_results' => 'No results',
                'edit_button_title' => 'Edit League',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this league?',
                ],
            ],
        ],
    ],
    'team' => [
        'index' => [
            'title' => 'Teams',
            'add' => [
                'title' => 'Add new team',
                'name' => 'Name',
                'name_placeholder' => 'Team',
                'logo' => 'Logo',
                'country' => 'Country',
                'description' => 'description',
                'description_placeholder' => '',
                'submit_button' => 'Add',
                'message' => [
                    'add_success' => 'Add team successfully',
                    'add_error' => 'Add team fail',
                ],
            ],
            'edit' => [
                'title' => 'Edit the team',
                'name' => 'Name',
                'name_placeholder' => 'Team',
                'logo' => 'Logo',
                'country' => 'Country',
                'description' => 'description',
                'description_placeholder' => '',
                'submit_button' => 'Edit',
                'message' => [
                    'edit_success' => 'Edit the team successfully',
                    'not_found' => 'The team not found',
                ],
            ],
            'delete' => [
                'message' => [
                    'delete_success' => 'Remove team successfully',
                    'not_found' => 'The team not found',
                    'delete_error' => 'Remove team fail',
                    'delete_error1451' => 'Information is being used, can not be deleted',
                ],
            ],
            'table' => [
                'title' => 'Teams',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'logo' => 'Logo',
                'name' => 'Name',
                'country' => 'Country',
                'description' => 'Description',
                'no_results' => 'No results',
                'edit_button_title' => 'Edit team',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this team?',
                ],
            ],
        ],
    ],
    'player' => [
        'index' => [
            'title' => 'Players',
            'add' => [
                'title' => 'Add new player',
                'name' => 'Name',
                'name_placeholder' => 'Player',
                'birthday' => 'Birthday',
                'birthday_placeholder' => '1996',
                'position' => 'Position',
                'team' => 'Team',
                'avatar' => 'Avatar',
                'country' => 'Country',
                'description' => 'description',
                'description_placeholder' => '',
                'submit_button' => 'Add',
                'message' => [
                    'add_success' => 'Add player successfully',
                    'add_error' => 'Add player fail',
                ],
            ],
            'edit' => [
                'title' => 'Edit the player',
                'name' => 'Name',
                'name_placeholder' => 'Player',
                'avatar' => 'Avatar',
                'country' => 'Country',
                'description' => 'description',
                'description_placeholder' => '',
                'submit_button' => 'Edit',
                'message' => [
                    'edit_success' => 'Edit the player successfully',
                    'not_found' => 'The player not found',
                ],
            ],
            'delete' => [
                'message' => [
                    'delete_success' => 'Remove player successfully',
                    'not_found' => 'The player not found',
                    'delete_error' => 'Remove player fail',
                    'delete_error1451' => 'Information is being used, can not be deleted',
                ],
            ],
            'table' => [
                'title' => 'Players',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'name' => 'Name',
                'birthday' => 'Birthday',
                'position' => 'Position',
                'team' => 'Team',
                'country' => 'Country',
                'no_results' => 'No results',
                'edit_button_title' => 'Edit player',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this player?',
                ],
            ],
        ],
    ],
    'user' => [
        'index' => [
            'title' => 'Users',
            'add' => [
                'title' => 'Add new user',
                'name' => 'Name',
                'name_placeholder' => 'Fullname',
                'email' => 'Email',
                'email_placeholder' => 'my.name@domain.com',
                'password' => 'Password',
                'avatar' => 'Avatar',
                'status' => 'Status',
                'status_active' => 'Active',
                'status_nonactive' => 'Non Active',
                'level' => 'Level',
                'level_admin' => 'Admin',
                'level_member' => 'Member',
                'coin' => 'Coin',
                'submit_button' => 'Add',
                'message' => [
                    'add_success' => 'Add user successfully',
                    'add_error' => 'Add user fail',
                ],
            ],
            'edit' => [
                'title' => 'Edit the user',
                'name' => 'Name',
                'name_placeholder' => 'Fullname',
                'email' => 'Email',
                'email_placeholder' => 'my.name@domain.com',
                'password' => 'Password',
                'avatar' => 'Avatar',
                'status' => 'Status',
                'status_active' => 'Active',
                'status_nonactive' => 'Non Active',
                'level' => 'Level',
                'level_admin' => 'Admin',
                'level_member' => 'Member',
                'coin' => 'Coin',
                'submit_button' => 'Edit',
                'message' => [
                    'edit_success' => 'Edit the user successfully',
                    'not_found' => 'The user not found',
                ],
            ],
            'delete' => [
                'message' => [
                    'delete_success' => 'Remove user successfully',
                    'not_found' => 'The user not found',
                    'delete_error' => 'Remove user fail',
                    'delete_error1451' => 'Information is being used, can not be deleted',
                ],
            ],
            'table' => [
                'title' => 'Users',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'name' => 'Name',
                'email' => 'Email',
                'social_user' => 'Login via social',
                'coin' => 'Coin',
                'status' => 'Status',
                'active' => 'Active',
                'non_active' => 'Non Active',
                'level' => 'Level',
                'member' => 'Member',
                'admin' => 'Admin',
                'no_results' => 'No results',
                'edit_button_title' => 'Edit user',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this user?',
                ],
            ],
        ],
    ],
    'match' => [
        'index' => [
            'title' => 'Matches',
            'add' => [
                'title' => 'Add new match',
                'name' => 'Name',
                'name_placeholder' => 'Match',
                'team1' => 'Team 1',
                'team2' => 'Team 2',
                'team1_goal' => 'Team 1 goal',
                'team2_goal' => 'Team 2 goal',
                'start_time' => 'Start time',
                'start_time_placeholder' => 'Choose start time',
                'end_time' => 'End time',
                'end_time_placeholder' => 'Choose end time',
                'league' => 'League',
                'description' => 'description',
                'description_placeholder' => '',
                'submit_button' => 'Add',
                'message' => [
                    'add_success' => 'Add match successfully',
                    'add_error' => 'Add match fail',
                    'match_exists' => 'The Match already exists',
                ],
            ],
            'edit' => [
                'title' => 'Edit the match',
                'name' => 'Name',
                'name_placeholder' => 'Match',
                'team1' => 'Team 1',
                'team2' => 'Team 2',
                'team1_goal' => 'Team 1 goal',
                'team2_goal' => 'Team 2 goal',
                'start_time' => 'Start time',
                'start_time_placeholder' => 'Choose start time',
                'end_time' => 'End time',
                'end_time_placeholder' => 'Choose end time',
                'league' => 'League',
                'description' => 'description',
                'description_placeholder' => '',
                'submit_button' => 'Edit',
                'message' => [
                    'edit_success' => 'Edit the match successfully',
                    'not_found' => 'The match not found',
                    'can_not_change_goal_times_second' => 'Can not change goals',
                ],
            ],
            'delete' => [
                'message' => [
                    'delete_success' => 'Remove match successfully',
                    'not_found' => 'The match not found',
                    'delete_error' => 'Remove match fail',
                    'delete_error1451' => 'Information is being used, can not be deleted',
                ],
            ],
            'table' => [
                'title' => 'Matches',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'name' => 'Name',
                'team1' => 'Team 1',
                'team2' => 'Team 2',
                'team1_goal' => 'Team 1 goal',
                'team2_goal' => 'Team 2 goal',
                'start_time' => 'Start time',
                'end_time' => 'End time',
                'league' => 'League',
                'no_results' => 'No results',
                'edit_button_title' => 'Edit match',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this match?',
                ],
            ],
        ],
    ],
    'rank' => [
        'index' => [
            'title' => 'Ranking',
            'all' => 'All',
            'delete' => [
                'message' => [
                    'delete_success' => 'Remove ranking result successfully',
                    'not_found' => 'The ranking result not found',
                    'delete_error' => 'Remove ranking result fail',
                    'delete_error_team_has_rank' => 'Can not remove this result. Please remove the matches which has the team listed in this result first',
                    'delete_error1451' => 'Information is being used, can not be deleted',
                ],
            ],
            'table' => [
                'title' => 'Ranking Table',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'team' => 'Team',
                'league' => 'League',
                'won' => 'W',
                'drawn' => 'D',
                'lost' => 'L',
                'goals_for' => 'GF',
                'goals_against' => 'GA',
                'goal_difference' => 'GD',
                'score' => 'Point',
                'no_results' => 'No results',
                'edit_button_title' => 'Edit ranking point',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this ranking result?',
                ],
            ],
        ],
    ],
    'player-award' => [
        'index' => [
            'title' => 'Player Awards',
            'add' => [
                'title' => 'Add new award',
                'name' => 'Name',
                'name_placeholder' => 'Award',
                'player' => 'Player',
                'match' => 'Match',
                'submit_button' => 'Add',
                'message' => [
                    'add_success' => 'Add award successfully',
                    'add_error' => 'Add award fail',
                    'match_exists' => 'The award already exists',
                ],
            ],
            'edit' => [
                'title' => 'Add new award',
                'name' => 'Name',
                'name_placeholder' => 'Award',
                'player' => 'Player',
                'match' => 'Match',
                'submit_button' => 'Edit',
                'message' => [
                    'edit_success' => 'Edit the award successfully',
                    'not_found' => 'The award not found',
                ],
            ],
            'delete' => [
                'message' => [
                    'delete_success' => 'Remove award successfully',
                    'not_found' => 'The award not found',
                    'delete_error' => 'Remove award fail',
                    'delete_error1451' => 'Information is being used, can not be deleted',
                ],
            ],
            'table' => [
                'title' => 'Awards',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'name' => 'Name',
                'player' => 'Player',
                'match' => 'Match',
                'no_results' => 'No results',
                'edit_button_title' => 'Edit award',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this award?',
                ],
            ],
        ],
    ],
    'team-achievement' => [
        'index' => [
            'title' => 'Team Achievements',
            'add' => [
                'title' => 'Add new achievement',
                'name' => 'Name',
                'name_placeholder' => 'Achievement',
                'team' => 'Team',
                'match' => 'Match',
                'submit_button' => 'Add',
                'message' => [
                    'add_success' => 'Add achievement successfully',
                    'add_error' => 'Add achievement fail',
                    'match_exists' => 'The achievement already exists',
                ],
            ],
            'edit' => [
                'title' => 'Add new achievement',
                'name' => 'Name',
                'name_placeholder' => 'Achievement',
                'team' => 'Team',
                'match' => 'Match',
                'submit_button' => 'Edit',
                'message' => [
                    'edit_success' => 'Edit the achievement successfully',
                    'not_found' => 'The achievement not found',
                ],
            ],
            'delete' => [
                'message' => [
                    'delete_success' => 'Remove achievement successfully',
                    'not_found' => 'The achievement not found',
                    'delete_error' => 'Remove achievement fail',
                    'delete_error1451' => 'Information is being used, can not be deleted',
                ],
            ],
            'table' => [
                'title' => 'Achievements',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'name' => 'Name',
                'team' => 'Team',
                'match' => 'Match',
                'no_results' => 'No results',
                'edit_button_title' => 'Edit achievement',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this achievement?',
                ],
            ],
        ],
    ],
    'position' => [
        'index' => [
            'title' => 'Player Positions',
            'add' => [
                'title' => 'Add new position',
                'name' => 'Name',
                'name_placeholder' => 'Position',
                'description' => 'description',
                'description_placeholder' => '',
                'submit_button' => 'Add',
                'message' => [
                    'add_success' => 'Add position successfully',
                    'add_error' => 'Add position fail',
                ],
            ],
            'edit' => [
                'title' => 'Edit the position',
                'name' => 'Name',
                'name_placeholder' => 'position',
                'description' => 'description',
                'description_placeholder' => '',
                'submit_button' => 'Edit',
                'message' => [
                    'edit_success' => 'Edit the position successfully',
                    'not_found' => 'The position not found',
                ],
            ],
            'delete' => [
                'message' => [
                    'delete_success' => 'Remove position successfully',
                    'not_found' => 'The position not found',
                    'delete_error' => 'Remove position fail',
                    'delete_error1451' => 'Information is being used, can not be deleted',
                ],
            ],
            'table' => [
                'title' => 'Player Positions',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'name' => 'Name',
                'description' => 'Description',
                'no_results' => 'No results',
                'edit_button_title' => 'Edit Position',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this position?',
                ],
            ],
        ],
    ],
    'bet' => [
        'index' => [
            'title' => 'Bets',
            'add' => [
                'title' => 'Place a bet',
                'match' => 'Match',
                'time_left' => 'Time left',
                'choose_the_match' => 'Please choose the match',
                'goal' => ':team Goal',
                'coin' => 'Coin',
                'submit_button' => 'Bet',
                'message' => [
                    'add_success' => 'Place the bet successfully',
                    'add_error' => 'Place the bet fail',
                    'lack_of_coin' => 'Lack of coin. Please deposit coin to your account',
                    'no_matches_upcomming' => 'No matches upcomming!',
                ],
            ],
            'edit' => [
                'title' => 'Edit the bets',
                'match' => 'Match',
                'time_left' => 'Time left',
                'goal' => ':team Goal',
                'coin' => 'Coin',
                'submit_button' => 'Edit',
                'message' => [
                    'edit_success' => 'Edit the bets successfully',
                    'not_found' => 'The bets not found',
                    'lack_of_coin' => 'Lack of coin. Please deposit coin to your account',
                    'match_ends_can_not_edit' => 'The match ends. Can not edit the bets',
                ],
            ],
            'delete' => [
                'message' => [
                    'delete_success' => 'Remove the bets successfully',
                    'not_found' => 'The bets not found',
                    'delete_error' => 'Remove bets fail',
                    'delete_error1451' => 'Information is being used, can not be deleted',
                ],
            ],
            'table' => [
                'title' => 'Bets',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'user' => 'User',
                'match' => 'Match',
                'coin' => 'coin',
                'team1' => 'Team 1',
                'team2' => 'Team 2',
                'betting_date' => 'Betting date',
                'no_results' => 'No results',
                'edit_button_title' => 'Edit bets',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this bets?',
                ],
            ],
        ],
    ],
    'post' => [
        'index' => [
            'title' => 'Post',
            'add_button' => 'Add Post',
            'trash' => 'Trash',
            'table' => [
                'title' => 'Posts',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'name' => 'Title',
                'image' => 'Image',
                'category' => 'Category',
                'user' => 'User',
                'view_count' => 'Views',
                'status' => 'Status',
                'created_at' => 'Publish Date',
                'no_results' => 'No results',
                'edit_button_title' => 'Edit Post',
                'trash_button_title' => 'Move to trash',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this post?',
                ],
            ],
        ],
        'trashed' => [
            'title' => 'Post',
            'trash' => 'Trash',
            'list' => 'Posts',
            'table' => [
                'title' => 'Trash',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'name' => 'Title',
                'image' => 'Image',
                'category' => 'Category',
                'user' => 'User',
                'view_count' => 'Views',
                'status' => 'Status',
                'created_at' => 'Publish Date',
                'deleted_at' => 'Date in the Trash',
                'no_results' => 'No results',
                'undo_button_title' => 'Undo Post',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this post?',
                ],
            ],
        ],
        'add' => [
            'title' => 'Add new post',
            'name' => 'Title',
            'name_placeholder' => 'News title',
            'category' => 'Category',
            'description' => 'Description',
            'content' => 'Content',
            'image' => 'image',
            'submit_button' => 'Publish Post',
            'message' => [
                'add_success' => 'Add post successfully',
                'add_error' => 'Add post fail',
            ],
        ],
        'edit' => [
            'title' => 'Edit the post',
            'last_update_date' => 'Last save:',
            'name' => 'Title',
            'name_placeholder' => 'News title',
            'category' => 'Category',
            'description' => 'Description',
            'content' => 'Content',
            'image' => 'image',
            'submit_button' => 'Save Post',
            'message' => [
                'edit_success' => 'Edit the post successfully',
                'not_found' => 'The post not found',
            ],
        ],
        'delete' => [
            'message' => [
                'delete_success' => 'Remove post successfully',
                'not_found' => 'The post not found',
                'delete_error' => 'Remove post fail',
            ],
        ],
        'trash' => [
            'message' => [
                'trash_success' => 'The post moved to trash successfully',
                'not_found' => 'The post not found',
                'trash_error' => 'The post moved to trash fail',
            ],
        ],
        'untrash' => [
            'message' => [
                'untrash_success' => 'Restore the post successfully',
                'not_found' => 'The post not found',
                'untrash_error' => 'Restore the post fail',
            ],
        ],
    ],
    'event' => [
        'index' => [
            'title' => 'Match Events',
            'trash' => 'Trash',
            'list' => 'Match Events',
            'add_button' => 'Add Event',
            'table' => [
                'title' => 'Events',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'name' => 'Title',
                'image' => 'Image',
                'match' => 'Match',
                'user' => 'User',
                'view_count' => 'Views',
                'status' => 'Status',
                'created_at' => 'Publish Date',
                'no_results' => 'No results',
                'edit_button_title' => 'Edit Match Events',
                'trash_button_title' => 'Move to trash',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this event?',
                ],
            ],
        ],
        'trashed' => [
            'title' => 'Match Events',
            'trash' => 'Trash',
            'list' => 'Match Events',
            'table' => [
                'title' => 'Trash',
                'search_placeholder' => 'Please enter the keyword...',
                'id' => '#',
                'name' => 'Title',
                'image' => 'Image',
                'match' => 'Match',
                'user' => 'User',
                'view_count' => 'Views',
                'status' => 'Status',
                'created_at' => 'Publish Date',
                'deleted_at' => 'Date in the Trash',
                'no_results' => 'No results',
                'undo_button_title' => 'Undo Event',
                'remove_button_title' => 'Remove',
                'message' => [
                    'delete_confirm' => 'Do you want to remove this event?',
                ],
            ],
        ],
        'add' => [
            'title' => 'Add new event',
            'name' => 'Title',
            'name_placeholder' => 'Event title',
            'match' => 'Match',
            'description' => 'Description',
            'content' => 'Content',
            'image' => 'image',
            'submit_button' => 'Publish Event',
            'message' => [
                'add_success' => 'Add event successfully',
                'add_error' => 'Add event fail',
            ],
        ],
        'edit' => [
            'title' => 'Edit the event',
            'last_update_date' => 'Last save:',
            'name' => 'Title',
            'name_placeholder' => 'Event title',
            'match' => 'Match',
            'description' => 'Description',
            'content' => 'Content',
            'image' => 'image',
            'submit_button' => 'Save Event',
            'message' => [
                'edit_success' => 'Edit the event successfully',
                'not_found' => 'The event not found',
            ],
        ],
        'delete' => [
            'message' => [
                'delete_success' => 'Remove event successfully',
                'not_found' => 'The event not found',
                'delete_error' => 'Remove event fail',
            ],
        ],
        'trash' => [
            'message' => [
                'trash_success' => 'The event moved to trash successfully',
                'not_found' => 'The event not found',
                'trash_error' => 'The event moved to trash fail',
            ],
        ],
        'untrash' => [
            'message' => [
                'untrash_success' => 'Restore the event successfully',
                'not_found' => 'The event not found',
                'untrash_error' => 'Restore the event fail',
            ],
        ],
    ],
    'profile' => [
        'show' => [
            'title' => 'Personal Profile',
            'name' => 'Name',
            'email' => 'Email',
            'social_user' => 'Login via social',
            'coin' => 'Coin',
            'status' => 'Status',
            'status_active' => 'Active',
            'status_non_active' => 'Non Active',
            'level' => 'Level',
            'level_admin' => 'Admin',
            'level_member' => 'Member',
            'register_date' => 'Register date',
            'edit_profile' => 'Edit Profile',
            'change_password' => 'Change Password',
        ],
        'edit' => [
            'title' => 'Edit Profile',
            'name' => 'Name',
            'name_placeholder' => 'Fullname',
            'email' => 'Email',
            'email_placeholder' => 'my.name@domain.com',
            'avatar' => 'Avatar',
            'submit_button' => 'Update profile',
            'last_update' => 'Last update',
            'message' => [
                'edit_success' => 'Update profile successfully',
                'not_found' => 'The profile not found',
            ],
        ],
        'change-password' => [
            'title' => 'Change Password',
            'current_password' => 'Current Password',
            'new_password' => 'New Password',
            'password_confirmation' => 'Password Confirmation',
            'submit_button' => 'Change password',
            'message' => [
                'edit_success' => 'Change password successfully',
                'password_incorrect' => 'Current password incorrect!',
            ],
        ],
    ],
];
