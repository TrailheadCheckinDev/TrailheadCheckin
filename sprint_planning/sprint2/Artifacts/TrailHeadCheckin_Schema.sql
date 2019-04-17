-- Coffee and WiFi
-- Database schema for TrailHead Checkin System

CREATE DATABASE if not exists TrailHeadCheckin;

USE TrailHeadCheckin;

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(191) NOT NULL,
    email VARCHAR(191) NOT NULL,
    email_verified_at TIMESTAMP,
    password VARCHAR(191),
    remember_token VARCHAR(100),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

-- Used for the password reset flow
CREATE TABLE IF NOT EXISTS password_resets (
    email VARCHAR(191) NOT NULL PRIMARY KEY,
    token VARCHAR(191) NOT NULL,
    created_at TIMESTAMP
);

-- Store each user session, should do an auto-logout nightly
CREATE TABLE IF NOT EXISTS user_sessions (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT(10) UNSIGNED NOT NULL,
    checkin_time TIMESTAMP NOT NULL,
    checkout_time TIMESTAMP NOT NULL
);

-- Calculated usage for trailhead (Run with cronJob -- Hourly?)
CREATE TABLE IF NOT EXISTS calc_usage (
    time TIMESTAMP PRIMARY KEY,
    num_users INT(10) UNSIGNED NOT NULL,
);

-- Alter the tables to add foreign key constraints
alter table user_sessions 
    add constraint sessions_FK0 foreign key ( user_id ) references users (id);

alter table password_resets 
    add constraint password_resets_FK0 foreign key ( email ) references users (email);