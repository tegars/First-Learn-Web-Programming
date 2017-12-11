--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: postgres; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE postgres IS 'default administrative connection database';


--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


--
-- Name: adminpack; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION adminpack; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';


SET search_path = public, pg_catalog;

--
-- Name: konversi(double precision); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION konversi(n double precision) RETURNS double precision
    LANGUAGE sql
    AS $$select((n-32)/1.8);$$;


ALTER FUNCTION public.konversi(n double precision) OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: fakultas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE fakultas (
    no_fak integer NOT NULL,
    nama_fak text
);


ALTER TABLE public.fakultas OWNER TO postgres;

--
-- Name: mahasiswa; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE mahasiswa (
    no_mah integer NOT NULL,
    nama_mah text,
    alamat_mah text,
    no_fak integer NOT NULL
);


ALTER TABLE public.mahasiswa OWNER TO postgres;

--
-- Data for Name: fakultas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY fakultas (no_fak, nama_fak) FROM stdin;
1	saintek
2	psikologi
3	syariah
\.


--
-- Data for Name: mahasiswa; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY mahasiswa (no_mah, nama_mah, alamat_mah, no_fak) FROM stdin;
1	tegar	malang	1
\.


--
-- Name: fakultas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY fakultas
    ADD CONSTRAINT fakultas_pkey PRIMARY KEY (no_fak);


--
-- Name: mahasiswa_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY mahasiswa
    ADD CONSTRAINT mahasiswa_pkey PRIMARY KEY (no_mah, no_fak);


--
-- Name: mahasiswa_no_fak_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY mahasiswa
    ADD CONSTRAINT mahasiswa_no_fak_fkey FOREIGN KEY (no_fak) REFERENCES fakultas(no_fak);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

