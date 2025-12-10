---
layout: page
title: Privacy Policy - AMEX → YNAB Import Extension
permalink: /amex-ynab-import-extension/privacy/
---

# Privacy Policy for AMEX → YNAB Import Extension

**Last Updated**: December 6, 2025
**Effective Date**: December 6, 2025

## Overview

AMEX → YNAB Import ("the Extension") is a Chrome browser extension that helps users import American Express (Germany) credit card transactions into their You Need A Budget (YNAB) accounts. This privacy policy explains how we handle your data.

## Our Commitment to Privacy

**We do not collect, store, transmit, or sell any of your personal or financial data.** All transaction processing happens entirely within your browser on your local device.

## Data We Handle (But Don't Collect)

The Extension accesses and processes the following data solely within your browser:

### 1. YNAB API Credentials
- **What**: Your YNAB Personal Access Token and Budget ID
- **Where Stored**: Locally in your Chrome browser using `chrome.storage.local` (device-only, never synced)
- **Purpose**: To authenticate with YNAB's API and import transactions into your budget
- **Access**: Only you and the YNAB API can access this data
- **Retention**: Stored until you remove the extension or clear your browser data

### 2. American Express Transaction Data
- **What**: Transaction dates, amounts, merchant names, and account information from your AMEX Germany account
- **Where Stored**: Temporarily in browser memory during import process only
- **Purpose**: To format and send transactions to YNAB
- **Access**: Only processed locally in your browser
- **Retention**: Cleared immediately after import completes (not persisted to disk)

### 3. YNAB Account Data
- **What**: Your YNAB budget names, account names, and existing transaction data (for duplicate detection)
- **Where Stored**: Temporarily in browser memory during import process only
- **Purpose**: To match transactions and prevent duplicates
- **Access**: Only processed locally in your browser
- **Retention**: Cleared immediately after import completes (not persisted to disk)

## What We Don't Do

- ❌ **No Data Collection**: We do not collect any personal information, financial data, or usage analytics
- ❌ **No External Servers**: We do not operate any servers that receive or store your data
- ❌ **No Third-Party Sharing**: We do not share your data with any third parties
- ❌ **No Tracking**: We do not use cookies, analytics, or any tracking mechanisms
- ❌ **No Data Sales**: We do not sell or monetize your data in any way
- ❌ **No Cloud Sync**: Your YNAB credentials are stored locally only (not synced across devices)

## Data Flow

Here's exactly what happens when you use the Extension:

1. **You provide credentials**: You enter your YNAB API token and budget ID in the extension popup
2. **Local storage**: These credentials are saved to `chrome.storage.local` (local to your device only)
3. **You trigger import**: You click "Start Import" while logged into AMEX Germany
4. **Browser extracts data**: The extension reads transaction data from the AMEX page you're viewing
5. **Browser processes data**: Transaction data is converted to YNAB format entirely in your browser
6. **Direct API call**: Your browser sends data directly to YNAB's API (api.youneedabudget.com)
7. **Memory cleared**: All transaction data is removed from memory when import completes

**At no point does your data pass through our servers or leave your control.**

## Third-Party Services

The Extension communicates directly with these services:

### YNAB API (api.youneedabudget.com)
- **Purpose**: To create transactions in your YNAB budget
- **Data Sent**: Transaction details (date, amount, payee, account)
- **Privacy Policy**: [YNAB Privacy Policy](https://www.youneedabudget.com/privacy-policy/)
- **Security**: All communication uses HTTPS encryption

### American Express (americanexpress.com)
- **Purpose**: To read transaction data from your AMEX account pages
- **Data Sent**: None (the extension only reads data from pages you're viewing)
- **Privacy Policy**: [American Express Privacy Policy](https://www.americanexpress.com/de/legal/online-datenschutzerklarung.html)
- **Security**: Uses your existing AMEX session (no credentials handled by extension)

## Permissions Explained

The Extension requests these Chrome permissions:

| Permission | Why We Need It |
|------------|----------------|
| `storage` | To save your YNAB credentials locally on your device |
| `scripting` | To inject code into AMEX pages to read transaction data |
| `activeTab` | To access the current AMEX tab when you click "Start Import" |
| `notifications` | To show you status updates during the import process |
| `tabs` | To open AMEX dashboard page when starting import |
| Host: `americanexpress.com` | To read transaction data from AMEX pages |
| Host: `api.youneedabudget.com` | To send transactions to YNAB API |

**We only request the minimum permissions necessary for the Extension to function.**

## Security Measures

- **Local-Only Storage**: YNAB credentials stored using `chrome.storage.local` (not `.sync`) to prevent syncing across devices
- **HTTPS Only**: All API communication uses encrypted HTTPS connections
- **No Logging**: Sensitive data is never logged to console or error messages
- **Memory Management**: Transaction data cleared from memory immediately after processing
- **Code Minification**: Production builds are minified to protect intellectual property (not to hide malicious code)
- **Open Source**: Source code available for review at [GitHub Repository](https://github.com/yemexx1/amex-ynab-import-extension)

## Your Rights

You have complete control over your data:

- **Access**: View stored credentials by opening the extension popup settings
- **Deletion**: Remove all stored data by:
  - Clearing credentials in the extension popup, or
  - Removing the extension from Chrome, or
  - Clearing Chrome's extension data: `chrome://settings/siteData`
- **Portability**: Your YNAB credentials are standard API tokens that work with any YNAB client

## Children's Privacy

The Extension is not intended for use by children under 13. We do not knowingly collect data from children.

## Changes to This Policy

We may update this privacy policy from time to time. Changes will be reflected in the "Last Updated" date above. Continued use of the Extension after changes constitutes acceptance of the updated policy.

## Geographic Scope

This Extension is designed for users of American Express Germany. We do not specifically target any geographic region, but the Extension may be used worldwide.

## Contact Information

If you have questions about this privacy policy or the Extension's data practices:

- **GitHub Issues**: [Report an Issue](https://github.com/yemexx1/amex-ynab-import-extension/issues)
- **Email**: [Create contact email or link to GitHub profile]

## Legal Basis (GDPR Compliance)

For users in the European Union:

- **Legal Basis**: Your explicit consent when you install the extension and provide credentials
- **Data Minimization**: We only process the minimum data necessary
- **Purpose Limitation**: Data is only used for importing transactions to YNAB
- **Storage Limitation**: Data is deleted immediately after processing (except stored credentials)
- **Right to Withdraw Consent**: Uninstall the extension at any time to withdraw consent

## Disclaimer

This Extension is not affiliated with, endorsed by, or officially connected with American Express or YNAB (You Need A Budget). All product names, logos, and brands are property of their respective owners.

**Use this Extension at your own risk.** While we take security seriously and process all data locally, we cannot guarantee the security of your YNAB credentials if your device is compromised.

---

**Summary**: We built this Extension with privacy as a core principle. Your financial data stays on your device and only goes where you explicitly send it (YNAB). We don't collect, store, or have access to any of your personal or financial information.
