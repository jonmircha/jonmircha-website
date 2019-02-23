CREATE DATABASE  jonmirch_suscribers;

USE jonmirch_suscribers;

CREATE TABLE subscribers(
  email VARCHAR(50) PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  date DATE NOT NULL
);
