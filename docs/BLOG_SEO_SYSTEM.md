# Vrinda Taxi Service — Blog & Dynamic SEO Post System Documentation

> **Purpose:** This technical document provides a complete architectural and implementation blueprint for the **Blog & Dynamic Post SEO Engine** integrated into this application.

---

## Table of Contents

1. [System Architecture & Core Capabilities](#1-system-architecture--core-capabilities)
2. [Database Schema & Data Model](#2-database-schema--data-model)
3. [Core Logic & Engine Components](#3-core-logic--engine-components)
4. [Administrative CMS Workflows (CRUD)](#4-administrative-cms-workflows-crud)
5. [Complete Source Code Reference](#5-complete-source-code-reference)
6. [Security & Production Best Practices](#6-security--production-best-practices)

---

## 1. System Architecture & Core Capabilities

The Blog / Dynamic Post system solves two critical problems simultaneously:
1. **Dynamic Content Marketing & Blogging**: Full-featured blog engine with categories, statuses, scheduled publishing, and rich-text editing.
2. **Dynamic Programmatic SEO Landing Pages**: Enables publishing custom destination and service landing pages (e.g., `/vrindavan-to-delhi-taxi-service`) without writing code or creating static Blade template files.

### Key Highlights:
- **Zero URL Prefix Requirement (`/{slug}`)**: Rather than being trapped under `/blog/{slug}`, articles live at the root URL for maximum organic SEO ranking.
- **Two-Tier Non-Breaking Catch-All Fallback**: Existing hardcoded landing pages continue to resolve even if no database entry exists.
- **Dynamic Header Hierarchy**: Adding a post to `Book Taxi`, `Our Location`, or `Services` automatically injects it into top navigation dropdowns across the entire website via `View::composer('*')`.
- **Tiptap WYSIWYG Editor**: Headless semantic HTML5 content editing via browser ESM (no build step required).

---

## 2. Database Schema & Data Model

### `categories` Table
- `id` (bigint, PK)
- `name` (string)
- `slug` (string, unique)
- `description` (text, nullable)
- `status` (string, default: 'active')
- `created_at`, `updated_at` (timestamps)

### `posts` Table
- `id` (bigint, PK)
- `category_id` (foreignId, nullable, references `categories.id`, ON DELETE SET NULL)
- `title` (string)
- `slug` (string, unique)
- `excerpt` (text, nullable)
- `status` (string, default: 'published')
- `content` (longText, nullable)
- `featured_image` (string, nullable)
- `meta_title` (string, nullable)
- `meta_description` (text, nullable)
- `published_at` (timestamp, nullable)
- `created_at`, `updated_at` (timestamps)

---

## 3. Core Engine Components

1. **Collision-Free Slug Generator**: Automatic incrementing loop ensures every post and category has a unique slug.
2. **Publishing Workflow**: Posts are publicly visible only if `status === 'published'` and `published_at <= now()`.
3. **Two-Tier Router**:
   - Tier 1: Look for published post in database.
   - Tier 2: Check if physical blade template exists (`front-end.{slug}`).
   - Tier 3: Dynamic taxi-service route fallback.
4. **View Composer Injection**: Injects active categories and posts into navbar dropdowns across all layout views.
5. **SEO Engine**: Dynamic Title, Description, Canonical link, OpenGraph metadata, and Schema.org Article JSON-LD.
