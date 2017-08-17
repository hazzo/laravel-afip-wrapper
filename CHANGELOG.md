#   ChangeLog

## V1.0.0-beta2

###### Changes

* Code refactored. `AfpiConfig` class handles config environment and instantiates needed methods for *PROD* or *DEV*. 

## V1.0.0-beta1

### New

###### Features

* Wrapper for AFIP Web Service to get auth based on a `private.key` and a `pem.crt`. 
* Select environment: **homologation** or **production** by `.env` file.

###### Future features

* All methods to generate electronic invoices.
* Methods to generate *CSR* file to get `private.key` and `pem.crt` on AFIP site.